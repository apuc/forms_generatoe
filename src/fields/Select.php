<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\interfaces\FieldMultipleInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class Select implements FieldInterface
{
    use OptionLoaderTrait;

    public function create($name, array $options)
    {
        $attrs = $this->loadAttributes($options);
        $html = "<select name='$name' $attrs>";

        $i = 0;
        $value = $this->getAttr('value');
        $data = $this->getAttr('data');
        foreach ((array)$data as $key => $datum){
            $selected = $value === $i ? 'selected' : '';
            $html .= "<option $selected value='$key'>$datum</option>";
            $i++;
        }

        $html .= '</select>';

        return $html;
    }
}