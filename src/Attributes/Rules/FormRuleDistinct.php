<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleDistinct extends FormRule
{
    public function getRules(): array
    {
        return ['distinct'];
    }
}
