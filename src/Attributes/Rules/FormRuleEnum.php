<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;
use Illuminate\Validation\Rule;

class FormRuleEnum extends FormRule
{
    /**
     * @param  class-string  $enum
     */
    public function __construct(
        private readonly string $enum,
    ) {

    }

    public function getRules(): array
    {
        return [Rule::enum($this->enum)];
    }
}
