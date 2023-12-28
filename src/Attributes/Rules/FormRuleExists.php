<?php

namespace Barklis\Form\Attributes\Rules;

use Barklis\Form\FormRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class FormRuleExists extends FormRule
{
    public function __construct(
        /**
         * @var class-string<Model>
         */
        private readonly string $model,
        private readonly string $column = 'id',
        /**
         * @var array<string, string|int|null>
         */
        private readonly array $where = [],
    ) {
    }

    public function getRules(): array
    {
        $rule = Rule::exists($this->model, $this->column);

        foreach ($this->where as $column => $value) {
            $rule->where($column, $value);
        }

        return [$rule];
    }
}
