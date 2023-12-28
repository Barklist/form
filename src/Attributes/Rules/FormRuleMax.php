<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\Configs\ConfigRule;
use Elsuterino\Form\FormRule;

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
