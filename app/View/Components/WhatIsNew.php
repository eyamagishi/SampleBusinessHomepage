<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhatIsNew extends Component
{
    public array $newsItems;

    /**
     * Create a new component instance.
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