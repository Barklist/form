<?php

namespace Elsuterino\Form;

abstract class FormCast
{
    abstract public function cast(mixed $value): mixed;
}
