<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;
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
