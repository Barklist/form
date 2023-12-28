<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;

class FormCastInt extends FormCast
{
    public function cast(mixed $value): ?int
    {
        return filter_var($value, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
    }
}
