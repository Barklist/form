<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormConfigValue;
use Barklis\Form\FormRule;

class FormRuleBetween extends FormRule
{
    public function __construct(
        private readonly int|FormConfigValue $min,
        private readonly int|FormConfigValue $max,
    ) {

    }

    public function getRules(): array
    {
        $min = $this->validateInt($this->min);
        $max = $this->validateInt($this->max);

        return ["between:$min,$max"];
    }
}
