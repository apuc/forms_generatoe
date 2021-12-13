<?php

namespace kavalar\forms\traits;

trait OptionLoaderTrait
{
    public $attrs = [];

    public function loadAttributes(array $data = [])
    {
        $this->attrs = $data;
        $attrs = '';
        foreach ($data as $key => $datum) {
            if(!in_array($key, $this->exclude())){
                $attrs .= "$key='$datum' ";
            }
        }
        return $attrs;
    }

    public function getAttr($key)
    {
        if (isset($this->attrs[$key])) {
            return $this->attrs[$key];
        }

        return false;
    }

    public function exclude()
    {
        return [
            'value', 'data'
        ];
    }

}