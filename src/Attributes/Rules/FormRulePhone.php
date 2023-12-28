<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;
use Propaganistas\LaravelPhone\Rules\Phone;

class FormRulePhone extends FormRule
{
    public function getRules(): array
    {
        return [(new Phone())->international()];
    }
}
