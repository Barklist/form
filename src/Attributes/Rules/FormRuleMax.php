<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormConfigValue;
use Barklis\Form\FormRule;

class FormRuleMax extends FormRule
{
    public function __construct(
        private readonly int|FormConfigValue $max,
    ) {
    }

    public function getRules(): array
    {
        $max = $this->validateInt($this->max);

        return ["max:{$max}"];
    }
}
