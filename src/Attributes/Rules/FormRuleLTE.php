<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;

class FormRuleLTE extends FormRule
{
    public function __construct(
        private readonly string $field,
    ) {
    }

    public function getRules(): array
    {
        return ["lte:{$this->field}"];
    }
}
