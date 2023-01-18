<?php

namespace App\Http\Livewire\Config\Production;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Product as Model;
use App\Models\ProductType;

class Product extends Component
{
    use LivewireAlert;

    public $name;
    public $type;
    public $products;
    public $productTypes;

    public function mount()
    {
        $products = Model::with('type')->get();
        $productTypes = ProductType::all();
        $this->products = $products;
        $this->productTypes = $productTypes;
    }

    public function addProduct()
    {
        $name = $this->name;
        $type = $this->type;
        if($name && $type){
            $product = new Model;
            $product->name = $name;
            $product->type_id = $type;
            $product->save();

            return redirect()->to(route('config.production.products'));
        }else {

            if(!$name){
                
                $this->addError('name', 'Please add product name');
            }
            if(!$type){
                $this->addError('name', 'Please add product type');
            }

            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please enter product name',
            ]);            
        }
    }
    
    public function render()
    {
        return view('livewire.config.production.product');
    }
}
