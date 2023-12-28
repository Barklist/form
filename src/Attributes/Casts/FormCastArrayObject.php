<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;
use Barklis\Form\FormObject;

class FormCastArrayObject extends FormCast
{
    /**
     * @param  class-string<FormObject>  $className
     */
    public function __construct(private readonly string $className)
    {

    }

    /**
     * @return FormObject[]
     */
    public function cast(mixed $value): array
    {
        return array_map(fn ($v) => $this->className::make($v), (array) $value);
    }
}
