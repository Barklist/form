<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleAfter extends FormRule
{
    public function __construct(
        private readonly string $datetime
    ) {

    }

    public function getRules(): array
    {
        return ["after:{$this->datetime}"];
    }
}
