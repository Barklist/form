<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;
use InvalidArgumentException;

class FormCastEnum extends FormCast
{
    /**
     * @param  class-string  $enum
     */
    public function __construct(private readonly string $enum)
    {

    }

    public function cast(mixed $value): mixed
    {
        if (! $this->isEnumClass($this->enum)) {
            throw new InvalidArgumentException('Provided enum value is not enum.');
        }

        return $this->enum::tryFrom($value);
    }

    private function isEnumClass(string $className): bool
    {
        return enum_exists($className);
    }
}
