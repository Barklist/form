<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\Configs\ConfigRule;
use Elsuterino\Form\FormRule;
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
