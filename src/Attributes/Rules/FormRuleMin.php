<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\Configs\ConfigRule;
use Elsuterino\Form\FormRule;

class FormRuleMin extends FormRule
{
    public function __construct(
        private readonly int|ConfigRule $min,
    ) {

    }

    public function getRules(): array
    {
        $min = $this->validateInt($this->min);

        return ["min:{$min}"];
    }
}
