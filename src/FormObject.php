<?php

namespace Barklis\Form;

use Illuminate\Contracts\Support\Arrayable;
use ReflectionClass;
use ReflectionException;

/**
 * @implements Arrayable<string, mixed>
 */
abstract class FormObject implements Arrayable
{
    /**
     * @param array<string, mixed> $data
     * @throws ReflectionException
     */
    public static function make(array $data): static
    {
        $arguments = [];

        $reflection = new ReflectionClass(static::class);

        $constructorParameters = $reflection->getConstructor()?->getParameters() ?? [];

        foreach ($constructorParameters as $parameter) {
            $name = $parameter->getName();

            $arguments[] = $data[$name] ?? null;
        }

        return $reflection->newInstanceArgs($arguments);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
