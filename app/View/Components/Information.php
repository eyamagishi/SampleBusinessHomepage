<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

/**
 * Information class
 * 
 * Component class for displaying information data.
 * 
 * @extends \Illuminate\View\Component
 */
class Information extends Component
{
    /**
     * @var Collection
     */
    public Collection $information;

    /**
     * Create a new component instance.
     * 
     * @param Collection $informations
     */
    public function __construct(Collection $information)
    {
        $this->information = $information;
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
