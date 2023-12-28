<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;
use Propaganistas\LaravelPhone\Rules\Phone;

class FormRulePhone extends FormRule
{
    public function getRules(): array
    {
        return [(new Phone())->international()];
    }
}
