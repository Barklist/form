<?php

namespace Elsuterino\Form\Attributes\Rules;

use Elsuterino\Form\FormRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class FormRuleUnique extends FormRule
{
    public function __construct(
        /**
         * @var class-string<Model>
         */
        private readonly string $model,
        private readonly string $column = 'id',
    ) {

    }

    public function getRules(): array
    {
        return [Rule::unique($this->model, $this->column)];
    }
}
