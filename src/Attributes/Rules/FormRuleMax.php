<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\Configs\ConfigRule;
use Barklis\Form\FormRule;

class FormRuleMax extends FormRule
{
    public function __construct(
        private readonly int|ConfigRule $max,
    ) {
    }

    public function getRules(): array
    {
        $max = $this->validateInt($this->max);

        return ["max:{$max}"];
    }
}
