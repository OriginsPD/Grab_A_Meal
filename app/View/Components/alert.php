<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;
    public $type;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function color(){
        if(session()->has('success')){
            return "text-green-700 bg-green-100 ";
        }
        return "text-red-700 bg-red-100 ";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
