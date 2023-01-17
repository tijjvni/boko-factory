<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Models\Production;

class Show extends Component
{

    public $production;


    public function mount()
    {
        $production = Production::find(request()->route('production'));
        $this->production = $production;
    }


    public function render()
    {
        return view('livewire.production.show');
    }

    public function sendToIndex()
    {
        return redirect()->to(route('production'));
    }

}
