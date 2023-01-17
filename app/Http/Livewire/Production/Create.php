<?php

namespace App\Http\Livewire\Production;

use App\Http\Controllers\ProductionController;
use App\Http\Requests\METHOD_Caller;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Http\Requests\StartProductionRequest;

use App\Models\Material;
use App\Models\Production;

class Create extends Component
{
    use LivewireAlert;

    public $materials = [];
    public $materialInputs = [];
    
    public $materialOptions;

    public $startNow;
    public $start_time;

    public function mount()
    {
        $this->startNow = true;
        array_push($this->materialInputs ,1);

        $this->materialOptions = Material::all();
    }



    public function startProduction()
    {
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
            }

            if(!$this->startNow){
                if(!$this->start_time){
                    $this->addError('start_time', 'Please enter production start time');
                }
            }

            if($this->getErrorBag()->isEmpty()){
                

                $production = new Production;
                $production->user_id = auth()->id();
                $production->save();


                $this->emit('production_started');

                foreach ($this->materials as $key => $material) {
                    $production->materials()->create([
                        'material_id' => $material['material'],
                        'quantity' => $material['qty'],
                    ]);
                }

                return redirect()->to(route('production.show',['production' => $production->id]));
            }

        }else {
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please add materials',
            ]);            
        }

    }

    public function addNewMaterialInput()
    {
        array_push($this->materialInputs ,count($this->materialInputs) + 1);
    }

    public function render()
    {
        return view('livewire.production.create');
    }
}
