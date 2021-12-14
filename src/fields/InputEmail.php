<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class InputEmail implements FieldInterface
{
    use OptionLoaderTrait;

    private $attrsList;
    private $value;
    private $label = false;
    private $name;

    public function create($name, array $options)
    {
        $this->attrsList = $this->loadAttributes($options);
        $this->name = $name;
        $this->value = $this->getAttr('value');
        return $this;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        $label = '';
        if ($this->label){
            $label = "<label>$this->label</label>";
        }
        return $label . "<input name='$this->name' type='email' value='$this->value' $this->attrsList>";
    }
}