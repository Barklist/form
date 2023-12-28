<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleEmail extends FormRule
{
    public function getRules(): array
    {
        return ['email'];
    }
}
