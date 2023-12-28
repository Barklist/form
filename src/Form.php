<?php

namespace Barklis\Form;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionProperty;
use TypeError;

/**
 * @implements Arrayable<string, mixed>
 */
abstract class Form implements Arrayable
{
    public function __construct(Request $request)
    {
        $this->validate($request);

        $this->castValues($request);
    }

    private function castValues(Request $request): void
    {
        $fieldsWithTypeErrors = collect();

        $reflection = new ReflectionClass($this);

        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            $name = $property->getName();

            $attributes = $property->getAttributes(FormField::class, flags: ReflectionAttribute::IS_INSTANCEOF);

            foreach ($attributes as $attribute) {
                $instance = $attribute->newInstance();

                $requestValue = $request->hasFile($name) ? $request->file($name) : $request->input($name);

                try {
                    $this->{$name} = $instance->castValue($requestValue);
                } catch (TypeError) {
                    $fieldsWithTypeErrors->push($name);
                }
            }
        }

        if($fieldsWithTypeErrors->isNotEmpty()) {
            throw ValidationException::withMessages(
                $fieldsWithTypeErrors
                    ->mapWithKeys(fn(string $key) => [$key => trans('validation.regex', ['attribute' => $key])])
                    ->toArray()
            );
        }
    }

    private function validate(Request $request): void
    {
        $reflection = new ReflectionClass($this);

        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        $rules = $this->getRules($properties);

        $validator = Validator::make($request->all(), $rules);

        $validator->validate();
    }

    /**
     * @param  ReflectionProperty[]  $properties
     * @return array<string, FormRule[]>
     */
    private function getRules(array $properties): array
    {
        $rules = [];

        foreach ($properties as $property) {
            $name = $property->getName();

            $rules[$name] = [];

            $attributes = $property->getAttributes(FormField::class, flags: ReflectionAttribute::IS_INSTANCEOF);

            foreach ($attributes as $attribute) {
                $instance = $attribute->newInstance();

                $rules = [...$rules, ...$instance->getRules($name)];
            }
        }

        return $rules;
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
