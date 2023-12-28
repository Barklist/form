<?php

namespace Barklis\Form\Attributes\Casts;

use Barklis\Form\FormCast;
use Exception;
use Illuminate\Support\Carbon;

class FormCastCarbon extends FormCast
{
    public function cast(mixed $value): ?Carbon
    {
        if (! $value) {
            return null;
        }

        try {
            return Carbon::parse($value);
        } catch (Exception $e) {
            return null;
        }
    }
}
