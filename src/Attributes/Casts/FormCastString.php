<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastString extends FormCast
{
    public function cast(mixed $value): ?string
    {
        $value = (string) $value;

        if (! $value) {
            return null;
        }

        return $value;
    }
}
