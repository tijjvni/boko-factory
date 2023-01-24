<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

use App\Models\Material;
use App\Models\Product;
// use App\Models\Material;

class Dashboard extends Component
{

    public $products;
    public $productsValue;
    public $materials;

    public function mount()
    {
        $this->products = Product::sum('quantity');
        $this->productsValue = Product::selectRaw('(quantity * price) as summation')->pluck('summation')->sum();
        $this->materials = Material::count();
    }

    public function render()
    {
        return view('livewire.store.dashboard');
    }
}
