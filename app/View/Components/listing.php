<?php

namespace App\View\Components;

use Illuminate\View\Component;

class listing extends Component
{
    /**
     * The listing data
     *
     * @var object?
     */
    public $data;
    
    /**
     * Create a new component instance.
     *
     * @param string $data
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listing');
    }
}
