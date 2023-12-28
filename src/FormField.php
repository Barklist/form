<?php

namespace Elsuterino\Form;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
readonly class FormField
{
    /**
     * @param  FormRule[]  $rules
     * @param  array<string, FormRule[]>  $rulesNested
     */
    public function __construct(private array $rules = [], private array $rulesNested = [], private ?FormCast $cast = null)
    {

    }

    /**
     * @return array<string, FormRule[]>
     */
    public function getRules(string $fieldName): array
    {
        $rules = [];

        if (count($this->rules)) {
            $rules[$fieldName] = collect($this->rules)
                ->map(fn (FormRule $rule) => $rule->getRules())
                ->flatten()
                ->toArray();
        }

        if (count($this->rulesNested)) {
            foreach ($this->rulesNested as $suffix => $assocRules) {
                $newRules = collect($assocRules)
                    ->map(fn (FormRule $rule) => $rule->getRules())
                    ->flatten()
                    ->toArray();

                if (! empty($rules[$fieldName.$suffix])) {
                    $rules[$fieldName.$suffix] = [...$rules[$fieldName.$suffix], ...$newRules];
                } else {
                    $rules[$fieldName.$suffix] = $newRules;
                }
            }
        }

        return $rules;
    }

    public function castValue(mixed $value): mixed
    {
        return $this->cast ? $this->cast->cast($value) : $value;
    }
}
