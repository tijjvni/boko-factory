<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

class Create extends Component
{

    public $materials = [];
    public $materialInputs = [];

    public $productionStarts;
    public $starts;

    public function mount()
    {
        $this->productionStarts = true;
        array_push($this->materialInputs ,1);
        // array_push($this->materialInputs ,2);
    }

    public function startProduction()
    {
        $this->resetErrorBag();
        $materials = $this->materials;

        if($materials){
            foreach ($materials as $key => $material) {
                if(!isset($material['name'])){
                    $this->addError('materials.'.$key.'.name', 'Please select material');
                }
                if(!isset($material['qty']) || $material['qty'] < 1){
                    $this->addError('materials.'.$key.'.qty', 'Please add material quantity');
                }
            }
        }
        // dd($this->starts);
        // dd($this->getErrorBag()->isEmpty());
        $this->emit('production_started');
    }

    public function addNewMaterialInput()
    {

    }

    public function render()
    {
        return view('livewire.production.create');
    }
}
