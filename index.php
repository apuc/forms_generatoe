<?php

use kavalar\forms\fields\InputText;
use kavalar\forms\fields\Label;
use kavalar\forms\fields\Select;
use kavalar\forms\Form;

require_once 'vendor/autoload.php';


$form = new Form();
$input = new InputText();
$label = new Label();
$select = new Select();

echo $label->create('new ', ['for' => 'firstField']);
echo '<br>';


echo $input->create('', ['name' => 'my_name', 'id' => 'firstField', 'placeholder' => 'myb placeholder']);
echo '<br>';
echo '<br>';
echo $select->create('', ['apple' => 'Яблоко', 'orange' => 'Апельсин'], ['name' => 'selectFruit']);