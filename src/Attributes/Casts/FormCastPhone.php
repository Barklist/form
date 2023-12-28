<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;
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
