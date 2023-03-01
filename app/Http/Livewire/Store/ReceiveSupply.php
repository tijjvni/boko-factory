<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Supply;
use App\Models\Supplier;
use App\Models\Material;

use PDF;

class ReceiveSupply extends ModalComponent
{
    use LivewireAlert;

    public $materials;
    public $suppliesInputs = [];
    public $materialsOptions;
    public $suppliers;
    public $supplierCheck;

    public function mount()
    {
        array_push($this->suppliesInputs ,1);
        $this->suppliers = Supplier::all();
        $this->materialsOptions = Material::all();
    }

    public function receiveSupply()
    {

        // $invoice->stream();
        return $invoice->stream();

        $this->resetErrorBag();
        $materials = $this->materials;

        if($materials){

            foreach ($materials as $key => $material) {
                if(!isset($material['material'])){
                    $this->addError('materials.'.$key.'.material', 'Please select material');
                }
                if(!isset($material['qty']) || $material['qty'] < 1){
                    $this->addError('materials.'.$key.'.qty', 'Please add material quantity');
                }
                if(!isset($material['supplierCheck']) && !isset($material['supplier']) ){
                    $this->addError('materials.'.$key.'.supplier', 'Please add supplier');
                }
            }

            if($this->getErrorBag()->isEmpty()){
                
                $supply = new Supply;
                $supply->user_id = auth()->id();
                $supply->save();


                foreach ($this->materials as $key => $material) {
                    $supply->materials()->create([
                        'supplier_id' => $material['supplier'] ?? null,
                        'material_id' => $material['material'],
                        'quantity' => $material['qty'],
                    ]);

                    $updateMaterial = Material::find($material['material']);
                    $updateMaterial->quantity = ($updateMaterial->quantity + $material['qty']);
                    $updateMaterial->save();
                }


                $this->flash('success', 'Success', [
                'position' => 'center',
                'timer' => '5000',
                'toast' => true,
                'timerProgressBar' => true,
                'text' => 'Supply received successfully.',
                ]);                  

                return redirect()->to(route('store'));
            }


        }else {
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please add supply materials',
            ]);            
        }


    }

    public function addNewSupplyInput()
    {
        array_push($this->suppliesInputs ,count($this->suppliesInputs) + 1);
    }

    public function render()
    {
        return view('livewire.store.receive-supply');
    }
}
