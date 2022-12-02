<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{  
       
    public $classMessage;
    public $defaultMessage;
      
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($classMessage, $defaultMessage="誰が松本人志やねん")
    {
        
        $this->classMessage = $classMessage;

        $this->defaultMessage = $defaultMessage;

       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base-component');
    }
}
