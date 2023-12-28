<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleRequired extends FormRule
{
    public function getRules(): array
    {
        return ['required'];
    }
}
