<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\Configs\ConfigRule;
use Elsuterino\Form\FormRule;

class FormRuleBetween extends FormRule
{
    public function __construct(
        private readonly int|ConfigRule $min,
        private readonly int|ConfigRule $max,
    ) {

    }

    public function getRules(): array
    {
        $min = $this->validateInt($this->min);
        $max = $this->validateInt($this->max);

        return ["between:$min,$max"];
    }
}
