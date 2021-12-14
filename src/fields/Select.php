<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\interfaces\FieldMultipleInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class Select implements FieldInterface
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
        $html = "<select name='$this->name' $this->attrsList>";
        $data = $this->getAttr('data');

        $i=0;
        foreach ((array)$data as $key => $datum){
            $selected = $this->value === $i ? 'selected' : '';
            $html .= "<option $selected value='$key'>$datum</option>";
            $i++;
        }

        $html .= '</select>';

        return $html;
    }
}