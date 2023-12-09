<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GoBack extends Component
{
    public string $title;
    public string $path;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $path)
    {
        $this->title = $title;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.go-back');
    }
}
