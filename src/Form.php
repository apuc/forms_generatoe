<?php

namespace kavalar\forms;

use kavalar\forms\fields\InputEmail;
use kavalar\forms\fields\InputText;
use kavalar\forms\fields\Select;
use kavalar\forms\interfaces\FieldInterface;

class Form
{
    public $action;
    private $html = '';

    private $pool = [];

    /**
     * @var FieldInterface
     */
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
            $this->currentField = $input->create($name, $options);
            $this->pool[] = $this->currentField;
        }

        return $this;
    }

    public function value($value)
    {
        $this->currentField->setValue($value);

        return $this;
    }

    public function label($label)
    {
        $this->currentField->setLabel($label);

        return $this;
    }

    public function end()
    {
        foreach ($this->pool as $item){
            $this->html .= $item->render();
        }
        $this->html .= '</form>';
        echo $this->html;
    }

}