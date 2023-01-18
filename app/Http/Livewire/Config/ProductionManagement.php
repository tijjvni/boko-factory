<?php

namespace App\Http\Livewire\Config;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Material;
use App\Models\MaterialType;

class ProductionManagement extends Component
{

    public $products;
    public $productCategories;
    public $materials;
    public $materialTypes;

    public function mount()
    {
        $this->products = Product::count();
        $this->productCategories = ProductType::count();
        $this->materials = Material::count();
        $this->materialTypes = MaterialType::count();
    }

    public function render()
    {
        return view('livewire.config.production-management');
    }
}
