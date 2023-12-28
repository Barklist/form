<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleEmail extends FormRule
{
    public function getRules(): array
    {
        return ['email'];
    }
}
