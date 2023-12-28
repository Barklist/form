<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleDate extends FormRule
{
    public function getRules(): array
    {
        return ['date'];
    }
}
