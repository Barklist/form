<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleString extends FormRule
{
    public function getRules(): array
    {
        return ['string'];
    }
}
