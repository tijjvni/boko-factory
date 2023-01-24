<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Order;

class Orders extends Component
{

    public $orders;

    public function mount()
    {
        $this->orders = Order::get();
    }

    public function render()
    {
        return view('livewire.sales.orders');
    }
}
