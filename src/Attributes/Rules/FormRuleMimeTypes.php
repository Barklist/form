<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormConfigValue;
use Barklis\Form\FormRule;

class FormRuleMimeTypes extends FormRule
{
    /**
     * @param  string[]  $mimes
     */
    public function __construct(
        private readonly array|FormConfigValue $mimes,
    ) {

    }

    public function getRules(): array
    {
        $mimes = collect($this->validateArrayString($this->mimes))->join(',');

        return ["mimetypes:{$mimes}"];
    }

}
