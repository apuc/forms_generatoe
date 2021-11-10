<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class Label implements FieldInterface
{
    use OptionLoaderTrait;

    public function create($value, array $options)
    {
        $attrs = $this->loadAttributes($options);
        return "<label $attrs>$value</label>";
    }
}