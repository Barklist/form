<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;

class FormCastArrayInt extends FormCast
{
    /**
     * @return int[]
     */
    public function cast(mixed $value): array
    {
        return array_map(fn ($v) => (int) $v, (array) $value);
    }
}
