<?php

namespace App\Http\Livewire\Config\Users;

use Livewire\Component;

class AddCustomer extends Component
{

    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;

    public function addCustomer()
    {
        
    }

    public function render()
    {
        return view('livewire.config.users.add-customer');
    }
}
