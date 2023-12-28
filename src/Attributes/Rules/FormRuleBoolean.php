<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleBoolean extends FormRule
{
    public function getRules(): array
    {
        return ['boolean'];
    }
}
