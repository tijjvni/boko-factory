<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Order;
use App\Models\Product;

class Cards extends Component
{
    public $sales;
    public $products;
    public $productsValue;
    public $salesPeriod;

    public function mount()
    {
        $this->salesPeriod = today()->toDateString();

        $this->products = Product::count();
        $this->sales = Order::whereStatus('completed')->whereDate('created_at','>',$this->salesPeriod)->sum('amount');

        $productsValue = Product::selectRaw('(quantity * price) as summation')->pluck('summation')->sum();

        $this->productsValue = ($productsValue >= 1000) ? number_format($productsValue/1000).'k' : number_format($productsValue,2);
    }

    public function render()
    {
        return view('livewire.dashboard.cards');
    }
}
