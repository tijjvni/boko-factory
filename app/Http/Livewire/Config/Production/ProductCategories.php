<?php

namespace App\Http\Livewire\Config\Production;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\ProductType as Model;

class ProductCategories extends Component
{

    use LivewireAlert;

    public $name;
    public $productCategories;

    public function mount()
    {
        $productCategories = Model::all();
        $this->productCategories = $productCategories;
    }

    public function addProductCategory()
    {
        $name = $this->name;
        if($name){
            $productCategory = new Model;
            $productCategory->name = $name;
            $productCategory->user_id = auth()->id();
            $productCategory->save();

            return redirect()->to(route('config.production.products.categories'));
        }else {
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please enter product category name',
            ]);            
        }
    }


    public function render()
    {
        return view('livewire.config.production.product-categories');
    }
}
