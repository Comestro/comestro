<?php

namespace App\View\Components\public\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class services extends Component
{
    /**
     * Create a new component instance.
     */
    public $services = [
        [
            'title' => 'Strategy',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'icon' => '💡', // Light Bulb Icon
            'bg' => 'bg-blue-100'
        ],
        [
            'title' => 'Design',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'icon' => '💻', // Laptop Icon
            'bg' => 'bg-pink-100'
        ],
        [
            'title' => 'Development',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'icon' => '⚙️', // Gear Icon
            'bg' => 'bg-orange-100'
        ],
        [
            'title' => 'Help & Supports',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'icon' => '❓', // Question Mark Icon
            'bg' => 'bg-green-100'
        ],
    ];

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.home.services');
    }
}
