<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;

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
