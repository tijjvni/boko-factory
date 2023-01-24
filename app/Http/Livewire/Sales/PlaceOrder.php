<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Customer;
use App\Models\Product;

class PlaceOrder extends ModalComponent
{
    use LivewireAlert;

    public $products;
    public $productsInputs = [];
    public $productsOptions;
    public $customers;
    public $customerCheck;

    public function mount()
    {

        array_push($this->productsInputs ,1);
        $this->productsOptions = Product::all();      
        $this->customers = Customer::all();

    }


    public function addNewProductInput()
    {
        array_push($this->productsInputs ,count($this->productsInputs) + 1);
    }

    public function render()
    {
        return view('livewire.sales.place-order');
    }
}
