<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Order;

class Sales extends Component
{

    public $sales;

    public function mount()
    {
        $this->sales = Order::whereStatus('completed')->get();
    }

    public function render()
    {
        return view('livewire.sales.sales');
    }
}
