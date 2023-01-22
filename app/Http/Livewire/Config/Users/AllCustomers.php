<?php

namespace App\Http\Livewire\Config\Users;

use Livewire\Component;

use App\Models\Customer;

class AllCustomers extends Component
{
  
    public $customers;
    public $allCustomers;
    public $allCustomersWithOrders;

    public function mount()
    {
        $this->customers = Customer::with('person')->get();
        $this->allCustomers = Customer::count();
        $this->allCustomersWithOrders = Customer::has('orders')->count();

    }


    public function render()
    {
        return view('livewire.config.users.all-customers');
    }
}
