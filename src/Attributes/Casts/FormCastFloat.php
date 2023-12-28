<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastFloat extends FormCast
{
    public function cast(mixed $value): ?float
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
    }
}
