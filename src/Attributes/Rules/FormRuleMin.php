<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\Configs\ConfigRule;
use Barklis\Form\FormRule;

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
