<?php

namespace App\Http\Livewire\Config\Users;

use Livewire\Component;

use App\Models\Supplier;

class AddSuppliers extends Component
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

    public function addSupplier()
    {
        $this->validate();
        
        $supplier = new Supplier;
        $supplier->save();
        $supplier->person()->create([
            'first_name' => $this->firstname,
            'last_name' => $this->lastname,
            'personable_type' => 'supplier',
            'personable_id' => $supplier->id
        ]);
        // dd($supplier->person);

        $supplier->person->contact()->create([
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'person_id' => $supplier->person->id,
        ]);

        return redirect()->to(route('config.users.suppliers'));
    }

    public function render()
    {
        return view('livewire.config.users.add-suppliers');
    }
}
