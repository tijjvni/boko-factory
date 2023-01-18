<?php

namespace App\Http\Livewire\Config\Production;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Material as Model;
use App\Models\MaterialType;

class Material extends Component
{
    use LivewireAlert;

    public $name;
    public $type;
    public $materials;
    public $materialTypes;

    public function mount()
    {
        $materials = Model::with('type')->get();
        $materialTypes = MaterialType::all();
        $this->materials = $materials;
        $this->materialTypes = $materialTypes;
    }

    public function addMaterial()
    {
        $name = $this->name;
        $type = $this->type;
        if($name && $type){
            $material = new Model;
            $material->name = $name;
            $material->type_id = $type;
            $material->save();

            return redirect()->to(route('config.production.materials'));
        }else {

            if(!$name){
                
                $this->addError('name', 'Please add material name');
            }
            if(!$type){
                $this->addError('name', 'Please add material type');
            }

            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please enter material name',
            ]);            
        }
    }
    public function render()
    {
        return view('livewire.config.production.material');
    }
}
