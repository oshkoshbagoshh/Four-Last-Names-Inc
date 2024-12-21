<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class counter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>
blade;
    }
}
