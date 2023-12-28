<?php

namespace Barklis\Form;

abstract class FormCast
{
    abstract public function cast(mixed $value): mixed;
}
