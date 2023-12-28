<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastBoolean extends FormCast
{
    public function __construct()
    {

    }

    public function cast(mixed $value): ?bool
    {
        if ($value === null) {
            return null;
        }

        return filter_var($value, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE);
    }
}
