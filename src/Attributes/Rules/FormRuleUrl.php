<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleUrl extends FormRule
{
    public function getRules(): array
    {
        return ['url'];
    }
}
