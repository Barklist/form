<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;
use Propaganistas\LaravelPhone\PhoneNumber;

class FormCastPhone extends FormCast
{
    public function cast(mixed $value): ?PhoneNumber
    {
        if (! $value) {
            return null;
        }

        return new PhoneNumber($value);
    }
}
