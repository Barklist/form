<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;

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
