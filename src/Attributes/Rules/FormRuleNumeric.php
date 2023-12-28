<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleNumeric extends FormRule
{
    public function getRules(): array
    {
        return ['numeric'];
    }
}
