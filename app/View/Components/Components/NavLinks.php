<?php

namespace App\View\Components\Components;

use Illuminate\View\Component;

class NavLinks extends Component
{
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this-> $type;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        dd($this->getNavDetails());
        return view('components.nav-links', $this->getNavDetails());

    }


    public function getNavDetails(){
        $case = "";
        switch ($this ->type) {
            case '1':
                $this->$case = "side-";
                break;
            case '2':
                $this->$case ="";
                break;
        }
        return ['case' =>$case];
    }
}
