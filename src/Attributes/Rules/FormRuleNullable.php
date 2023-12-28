<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleNullable extends FormRule
{
    public function getRules(): array
    {
        return ['nullable'];
    }
}
