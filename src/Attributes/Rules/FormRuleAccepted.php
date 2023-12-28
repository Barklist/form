<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleAccepted extends FormRule
{
    public function getRules(): array
    {
        return ['accepted'];
    }
}
