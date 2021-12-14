<?php

namespace kavalar\forms\interfaces;

interface FieldInterface
{

    public function create($name, array $options);
    public function setLabel($label);
    public function setValue($value);
    public function render();

}