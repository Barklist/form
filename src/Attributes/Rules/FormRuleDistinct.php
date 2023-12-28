<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleDistinct extends FormRule
{
    public function getRules(): array
    {
        return ['distinct'];
    }
}
