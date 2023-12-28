<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;
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
