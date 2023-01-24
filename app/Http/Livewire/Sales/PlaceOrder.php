<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;

class PlaceOrder extends ModalComponent
{
    use LivewireAlert;

    public $products;
    public $productsInputs = [];
    public $productsOptions;
    public $customer;
    public $customers;
    public $customerCheck;

    public function mount()
    {
        array_push($this->productsInputs ,1);
        $this->productsOptions = Product::all();      
        $this->customers = Customer::all();
    }

    public function placeOrder()
    {
        $this->resetErrorBag();
        $products = $this->products;
        if($products){
            
            if(!isset($this->customerCheck) && !isset($this->customer) ){
                $this->addError('customer', 'Please add customer');
            }

            foreach ($products as $key => $product) {
                if(!isset($product['product'])){
                    $this->addError('products.'.$key.'.product', 'Please select product');
                }
                if(!isset($product['qty']) || $product['qty'] < 1){
                    $this->addError('products.'.$key.'.qty', 'Please add product quantity');
                }
            }


            if($this->getErrorBag()->isEmpty()){
                    
                $prdct = Product::find($product['product']);

                $order = new Order;
                $order->user_id = auth()->id();
                $order->save();

                foreach ($this->products as $key => $product) {
                    $order->products()->create([
                        'product_id' => $product['product'],
                        'price' => $prdct->price,
                        'quantity' => $product['qty'],
                    ]);

                    $order->amount = $order->amount + ($prdct->price * $product['qty']);
                    $order->save(); 

                    if($this->customerCheck){
                        $order->customer_id = $this->customer;
                        $order->save();
                    }else {
                        $order->customer()->person()->create([
                            'first_name' => "GUEST",
                            'last_name' => "CSTMR",
                        ]);
                    }
                }


                $this->flash('success', 'Success', [
                'position' => 'center',
                'timer' => '5000',
                'toast' => true,
                'timerProgressBar' => true,
                'text' => 'Order placed successfully.',
                ]);                  

                return redirect()->to(route('sales'));
            }       

        }else{
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please add order products',
            ]); 
        }
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
