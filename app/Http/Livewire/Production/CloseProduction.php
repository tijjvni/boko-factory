<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Material;
use App\Models\Product;
use App\Models\Production;

class CloseProduction extends ModalComponent
{

    use LivewireAlert;

    public $products = [];
    public $productInputs = [];
    
    public $productsOptions;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $production = request()->session()->get('production');
        $this->production = Production::find($production);

        array_push($this->productInputs ,1);
        $this->productsOptions = Product::all();

    }

    public function addNewProductInput()
    {
        array_push($this->productInputs ,count($this->productInputs) + 1);
    }    

    public function closeProduction()
    {

        $this->resetErrorBag();
        $products = $this->products;

        if($products){

            foreach ($products as $key => $product) {
                if(!isset($product['product'])){
                    $this->addError('products.'.$key.'.product', 'Please select product');
                }
                if(!isset($product['qty']) || $product['qty'] < 1){
                    $this->addError('products.'.$key.'.qty', 'Please add product quantity');
                }
            }


            if($this->getErrorBag()->isEmpty()){
                
                $production = Production::find($this->production->id);
                $production->is_closed = true;
                $production->status = 'completed';
                $production->save();    


                $this->emit('production_closed');

                foreach ($products as $key => $product) {

                    $updateProduct = Product::find($product['product']);
                    $updateProduct->quantity = ($updateProduct->quantity + $product['qty']);
                    $updateProduct->save();
                }

                $this->flash('success', 'Success', [
                'position' => 'center',
                'timer' => '5000',
                'toast' => true,
                'timerProgressBar' => true,
                'text' => 'Please closed successfully.',
                ]);                  

                return redirect()->to(route('production.show',['production' => $this->production->id]));
            }            

        }else {
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please production product output',
            ]);            
        }

    }

    public function render()
    {
        return view('livewire.production.close-production');
    }
}
