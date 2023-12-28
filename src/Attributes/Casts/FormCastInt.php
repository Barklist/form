<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastInt extends FormCast
{
    public function cast(mixed $value): ?int
    {
        return filter_var($value, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
    }
}
