<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Order;
use App\Models\ProductionRequest;

class Dashboard extends Component
{

    public $ordersPending;
    public $sales;
    public $orders;
    public $salesPeriod;

    public function mount()
    {


        $this->salesPeriod = today()->toDateString();

        $this->orders = Order::count();
        $this->sales = Order::whereStatus('completed')->whereDate('created_at','>',$this->salesPeriod)->sum('amount');
        $this->ordersPending = Order::whereStatus('pending')->count();
    }


    public function placeOrder()
    {
         $this->emit('openModal', 'sales.place-order');       
    }

    public function render()
    {
        return view('livewire.sales.dashboard');
    }
}
