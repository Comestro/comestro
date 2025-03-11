<?php
namespace App\View\Components\Public\Home;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Customer;

class OurCustomer extends Component
{
    public $customers;

    public function __construct()
    {
        $this->customers = Customer::latest()->take(3)->get();
    }

    public function render():View|Closure|string
    {
        return view('components.public.home.our-customer', [
            'customers' => $this->customers,
        ]);
    }
}