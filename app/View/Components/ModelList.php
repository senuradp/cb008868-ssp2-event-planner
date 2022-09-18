<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModelList extends Component
{
    public $columns;

    public $models;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns, $models)
    {
        //allocate the variables to the component
        $this->columns = $columns;
        $this->models = $models;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // pass data to the view
        return view('components.model-list', [
            'columns' => $this->columns,
            'models' => $this->models
        ]);
    }
}
