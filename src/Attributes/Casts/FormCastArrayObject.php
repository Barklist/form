<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;
use Elsuterino\Form\FormObject;

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
