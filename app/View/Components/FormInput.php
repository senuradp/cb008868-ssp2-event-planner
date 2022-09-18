<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{

    public $id;
    public $name;
    public $type;
    public $label;
    public $value;
    public $placeholder;
    public $help;
    public $required;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $type, $label, $value = null, $placeholder = '', $help = '', $required = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input', [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'label' => $this->label,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'help' => $this->help,
            'required' => $this->required,
        ]);
    }
}
