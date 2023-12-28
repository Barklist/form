<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleNumeric extends FormRule
{
    public function getRules(): array
    {
        return ['numeric'];
    }
}
