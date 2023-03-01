<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Order as Model;

use PDF;
class Order extends Component
{

    public $order;


    public function mount()
    {
        $order = Model::find(request()->route('order'));
        $this->order = $order;

       request()->session()->put('order',$order->id);
    }

    public function processOrder()
    {
         $this->emit('openModal', 'sales.process-order');       
    }

    public function render()
    {
        return view('livewire.sales.order');
    }
}
