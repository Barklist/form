<?php

namespace Barklis\Form;

use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

readonly class FormConfigValue
{
    protected mixed $value;

    public function __construct(protected string $path)
    {
        if (! Config::has($path)) {
            throw new InvalidArgumentException("Config with path $path does not exist.");
        }

        $this->value = Config::get($path);
    }

    public function get(): mixed{
        return $this->value;
    }
}