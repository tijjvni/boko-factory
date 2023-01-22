<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Models\Production;

class AllProductions extends Component
{

    public $productions;

    public function mount()
    {
        $this->productions = Production::all();
    }

    public function render()
    {
        return view('livewire.production.all-productions');
    }
}
