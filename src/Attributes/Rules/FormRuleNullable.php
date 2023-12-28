<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleNullable extends FormRule
{
    public function getRules(): array
    {
        return ['nullable'];
    }
}
