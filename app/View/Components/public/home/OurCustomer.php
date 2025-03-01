<?php

namespace App\View\Components\public\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurCustomer extends Component
{
    /**
     * Create a new component instance.
     */
    public $image, $name, $designation, $message;

    public function __construct($image, $name, $designation, $message)
    {
        $this->image = $image;
        $this->name = $name;
        $this->designation = $designation;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.home.our-customer');
    }
}
