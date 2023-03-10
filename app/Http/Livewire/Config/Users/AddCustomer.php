<?php

namespace App\Http\Livewire\Config\Users;

use Livewire\Component;

use App\Models\Customer;

class AddCustomer extends Component
{

    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;

    protected $rules = [
        'firstname' => 'required|min:4',
        'lastname' => 'required|min:4',
        'phone' => 'required|min:11',
        'address' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function addCustomer()
    {
        $this->validate();
        
        $customer = new Customer;
        $customer->save();
        $customer->person()->create([
            'first_name' => $this->firstname,
            'last_name' => $this->lastname,
            'personable_type' => 'customer',
            'personable_id' => $customer->id
        ]);

        $customer->person->contact()->create([
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'person_id' => $customer->person->id,
        ]);

        return redirect()->to(route('config.users.customers'));
    }
    public function render()
    {
        return view('livewire.config.users.add-customer');
    }
}
