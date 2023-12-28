<?php

namespace Elsuterino\Form\Attributes\Casts;

use Elsuterino\Form\FormCast;
use Illuminate\Http\UploadedFile;
use TypeError;

class FormCastFile extends FormCast
{
    public function cast(mixed $value): ?UploadedFile
    {
        if (! $value instanceof UploadedFile) {
            throw new TypeError('Could not get the file.');
        }

        return $value;
    }
}
