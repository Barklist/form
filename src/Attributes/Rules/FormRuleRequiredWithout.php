<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleRequiredWithout extends FormRule
{
    public function __construct(
        private readonly string $field,
    ) {

    }

    public function getRules(): array
    {
        return ["required_without:{$this->field}"];
    }
}
