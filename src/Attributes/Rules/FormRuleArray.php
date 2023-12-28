<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleArray extends FormRule
{
    public function getRules(): array
    {
        return ['array'];
    }
}
