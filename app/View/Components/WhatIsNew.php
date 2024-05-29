<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * WhatIsNew class
 * 
 * Component class for displaying "What's New" items.
 * 
 * @extends \Illuminate\View\Component
 */
class WhatIsNew extends Component
{
    /**
     * @var array
     */
    public array $newsItems;

    /**
     * Create a new component instance.
     * 
     * @param array $newsItems
     */
    public function __construct(array $newsItems)
    {
        $this->newsItems = $newsItems;
    }

    /**
     * Get the view / contents that represent the component.
     * 
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.what-is-new');
    }
}
