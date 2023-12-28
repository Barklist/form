<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;

class FormCastFloat extends FormCast
{
    public function cast(mixed $value): ?float
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
    }
}
