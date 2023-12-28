<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleInteger extends FormRule
{
    public function getRules(): array
    {
        return ['integer'];
    }
}
