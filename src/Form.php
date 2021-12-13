<?php

namespace kavalar\forms;

use kavalar\forms\fields\InputEmail;
use kavalar\forms\fields\InputText;
use kavalar\forms\fields\Select;

class Form
{
    public $action;
    private $html = '';
    private $currentField;

    public function __construct($action = '')
    {
        $this->action = $action;
    }

    public function start()
    {
        $this->html .= "<form action='$this->action'>";
    }

    public function create($type, $name, array $options)
    {
        if ($type == 'text') {
            $input = new InputText();
        }
        if ($type == 'email') {
            $input = new InputEmail();
        }
        if ($type == 'select') {
            $input = new Select();
        }

        if (isset($input)) {
            $this->html .= $input->create($name, $options);
        }

        return $this;
    }

    public function setValue($value)
    {

    }

    public function label()
    {
        return $this;
    }

    public function end()
    {
        $this->html .= '</form>';
        echo $this->html;
    }

}