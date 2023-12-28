<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastArrayString extends FormCast
{
    /**
     * @return string[]
     */
    public function cast(mixed $value): array
    {
        return array_map(fn ($v) => (string) $v, (array) $value);
    }
}
