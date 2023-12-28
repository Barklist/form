<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleInteger extends FormRule
{
    public function getRules(): array
    {
        return ['integer'];
    }
}
