<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleDate extends FormRule
{
    public function getRules(): array
    {
        return ['date'];
    }
}
