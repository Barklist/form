<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleAccepted extends FormRule
{
    public function getRules(): array
    {
        return ['accepted'];
    }
}
