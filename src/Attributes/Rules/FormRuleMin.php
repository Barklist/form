<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormConfigValue;
use Barklis\Form\FormRule;

class FormRuleMin extends FormRule
{
    public function __construct(
        private readonly int|FormConfigValue $min,
    ) {

    }

    public function getRules(): array
    {
        $min = $this->validateInt($this->min);

        return ["min:{$min}"];
    }
}
