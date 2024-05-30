<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

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
     * @var Collection
     */
    public Collection $newsItems;
    public Collection $categories;

    /**
     * Create a new component instance.
     * 
     * @param array $newsItems
     */
    public function __construct(Collection $newsItems, Collection $categories)
    {
        $this->newsItems  = $newsItems;
        $this->categories = $categories;
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
