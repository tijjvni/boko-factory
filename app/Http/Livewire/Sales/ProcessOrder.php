<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use PDF;

class ProcessOrder extends ModalComponent
{
    use LivewireAlert;

    public $order;
    public $requested;
    public $productsAvailable;

    public function mount()
    {

        $order = request()->session()->get('order');
        $order = Order::with('products')->find($order);        
        $this->order = $order;
        $this->productsAvailable = true;

        foreach ($order->products as $key => $product) {

            if(Product::find($product->product_id)->quantity < $product->quantity){
                $this->productsAvailable = false;
            }

        }

        if($this->productsAvailable )
        {
            request()->session()->flash('flash.banner', 'Products available in store');
        }else {

            request()->session()->flash('flash.banner', 'Products not available in store');
            request()->session()->flash('flash.bannerStyle', 'danger');
        }

    }

    public function printLoadingOrder()
    {
        $order = $this->order;
        $data = array();
        $data['order'] = $order;
        $invoice = PDF::loadView('docs.request-order',$data);
        $invoice->save(storage_path().'/rqst-ordr.pdf');
        
        return response()->download(storage_path('/rqst-ordr.pdf'));
    }

    public function requestOrder()
    {
        $this->alert('success', 'Success', [
        'position' => 'center',
        'timer' => '5000',
        'toast' => true,
        'timerProgressBar' => true,
        'text' => 'Order Requested.',
        ]);         


        $requested = true;
        $this->requested = $requested;        
    }

    public function render()
    {
        return view('livewire.sales.process-order');
    }
}
