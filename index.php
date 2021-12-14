<?php

use kavalar\forms\fields\InputText;
use kavalar\forms\fields\Label;
use kavalar\forms\fields\Select;
use kavalar\forms\Form;

require_once 'vendor/autoload.php';

$form = new Form('/user/create');

$form->start();

$form->create('text', 'phone', ['class' => 'form-control', 'id' => 'valid-phone'])
    ->label("Телефое 321")
    ->value(6757567);
$form->create('email', 'user_email', ['value' => 'qwe@mail.ru', 'class' => 'form-control'])
    ->value('www@mail.ru');
$form->create('select', 'city', ['data' => ['Донецк', 'Макеевка'], 'value' => 1, 'class' => 'form-control']);

$form->end();