<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Information extends Component
{
    public array $informations;

    /**
     * Create a new component instance.
     *
     * @param string $informations
     */
    public function __construct(array $informations)
    {
        $this->informations = $informations;
    }

    /**
     * Get the view / contents that represent the component.
     * 
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.information');
    }
}
