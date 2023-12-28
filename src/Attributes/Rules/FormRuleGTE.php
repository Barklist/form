<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;

class FormRuleGTE extends FormRule
{
    public function __construct(
        private readonly string $field,
    ) {

    }

    public function getRules(): array
    {
        return ["gte:{$this->field}"];
    }
}
