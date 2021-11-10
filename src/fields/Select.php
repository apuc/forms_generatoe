<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\interfaces\FieldMultipleInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class Select implements FieldMultipleInterface
{
    use OptionLoaderTrait;

    public function create($value, array $data, array $options)
    {
        $attrs = $this->loadAttributes($options);
        $html = "<select $attrs>";

        $i = 0;
        foreach ($data as $key => $datum){
            $selected = $value === $i ? 'selected' : '';
            $html .= "<option $selected value='$key'>$datum</option>";
            $i++;
        }

        $html .= '</select>';

        return $html;
    }
}