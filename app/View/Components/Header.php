<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $name;
    public $sport;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$sport)
    {
        $this->name = $name;
        $this->sport = $sport;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
