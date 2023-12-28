<?php

namespace Barklis\Form;

use Barklis\Form\Configs\ConfigRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\ValidatorAwareRule;
use InvalidArgumentException;

abstract class FormRule
{
    /**
     * @return (string|ValidatorAwareRule|Rule|ValidationRule)[]
     */
    abstract public function getRules(): array;

    private function ruleName(): string
    {
        return $this::class;
    }

    protected function validateInt(mixed $value): int
    {
        if($value instanceof ConfigRule){
            $value = $value->get();
        }

        if(!is_int($value)) {
            throw new InvalidArgumentException("Provided value for rule {$this->ruleName()} must be int.");
        }

        return $value;
    }

    /**
     * @return string[]
     */
    protected function validateArrayString(mixed $value): array
    {
        if($value instanceof ConfigRule){
            $value = $value->get();
        }

        if(!is_array($value)) {
            throw new InvalidArgumentException("Provided value for rule {$this->ruleName()} must be array.");
        }

        foreach ($value as $v) {
            if (!is_string($v)) {
                throw new InvalidArgumentException('Each mime type must be a string.');
            }
        }

        if(count($value) === 0) {
            throw new InvalidArgumentException('Provide at least one value for mime types.');
        }

        return $value;
    }
}
