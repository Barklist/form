<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleConfirmed extends FormRule
{
    public function getRules(): array
    {
        return ['confirmed'];
    }
}
