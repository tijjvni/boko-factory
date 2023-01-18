<?php

namespace App\Http\Livewire\Config\Production;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\MaterialType as Model;

class MaterialType extends Component
{
    use LivewireAlert;

    public $name;
    public $materialTypes;

    public function mount()
    {
        $materialTypes = Model::all();
        $this->materialTypes = $materialTypes;
    }

    public function addMaterialType()
    {
        $name = $this->name;
        if($name){
            $materialType = new Model;
            $materialType->name = $name;
            $materialType->user_id = auth()->id();
            $materialType->save();

            return redirect()->to(route('config.production.materials.types'));
        }else {
            $this->alert('error', 'Error', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Please enter material type name',
            ]);            
        }
    }

    public function render()
    {
        return view('livewire.config.production.material-type');
    }
}
