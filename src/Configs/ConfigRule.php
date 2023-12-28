<?php

namespace Barklis\Form\Configs;

use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

readonly class ConfigRule
{
    protected mixed $value;

    public function __construct(protected string $path)
    {
        if (! Config::has($path)) {
            throw new InvalidArgumentException("Config with path $path does not exist.");
        }

        $this->value = Config::get($path);
    }

    protected function throwInvalidType(string $type): InvalidArgumentException
    {
        return new InvalidArgumentException("Config for path {$this->path} returns wrong type, it should be $type");
    }

    public function get(): mixed{
        return $this->value;
    }
}
