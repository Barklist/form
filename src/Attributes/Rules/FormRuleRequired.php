<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleRequired extends FormRule
{
    public function getRules(): array
    {
        return ['required'];
    }
}
