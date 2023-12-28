<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\Configs\ConfigRule;
use Barklis\Form\FormRule;
use InvalidArgumentException;

class FormRuleMimeTypes extends FormRule
{
    /**
     * @param  string[]  $mimes
     */
    public function __construct(
        private readonly array|ConfigRule $mimes,
    ) {

    }

    public function getRules(): array
    {
        $mimes = collect($this->validateArrayString($this->mimes))->join(',');

        return ["mimetypes:{$mimes}"];
    }

}
