<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleArray extends FormRule
{
    public function getRules(): array
    {
        return ['array'];
    }
}
