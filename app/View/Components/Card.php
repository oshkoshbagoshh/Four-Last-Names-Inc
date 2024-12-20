<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $subtitle;
    public $hasFooter;

    public function __construct($title = '', $subtitle = '', $hasFooter = false)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->hasFooter = $hasFooter;
    }

    public function render()
    {
        return view('components.card');
    }
}