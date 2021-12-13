<?php

use kavalar\forms\fields\InputText;
use kavalar\forms\fields\Label;
use kavalar\forms\fields\Select;
use kavalar\forms\Form;

require_once 'vendor/autoload.php';

$form = new Form('/user/create');

$form->start();

$form->create('text', 'phone', ['class' => 'form-control', 'id' => 'valid-phone']);
$form->create('email', 'user_email', ['value' => 'qwe@mail.ru', 'class' => 'form-control']);
$form->create('select', 'city', ['data' => ['Донецк', 'Макеевка'], 'value' => 0, 'class' => 'form-control']);

$form->end();