<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class post extends Component
{
    public $id;
    public $title;
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($id,$title, $description)
    {   
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;

        return $this;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
