<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleAfter extends FormRule
{
    public function __construct(
        private readonly string $datetime
    ) {

    }

    public function getRules(): array
    {
        return ["after:{$this->datetime}"];
    }
}
