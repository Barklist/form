<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleConfirmed extends FormRule
{
    public function getRules(): array
    {
        return ['confirmed'];
    }
}
