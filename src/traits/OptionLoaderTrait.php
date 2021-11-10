<?php

namespace kavalar\forms\traits;

trait OptionLoaderTrait
{

    public function loadAttributes(array $data = [])
    {
        $attrs = '';
        foreach ($data as $key => $datum){
            $attrs .= $key . '=' .$datum . ' ';
        }
        return $attrs;
    }

}