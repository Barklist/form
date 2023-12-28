<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

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
