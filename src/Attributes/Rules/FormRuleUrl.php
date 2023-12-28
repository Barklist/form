<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleUrl extends FormRule
{
    public function getRules(): array
    {
        return ['url'];
    }
}
