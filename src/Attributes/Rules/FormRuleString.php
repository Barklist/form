<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleString extends FormRule
{
    public function getRules(): array
    {
        return ['string'];
    }
}
