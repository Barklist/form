<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleBoolean extends FormRule
{
    public function getRules(): array
    {
        return ['boolean'];
    }
}
