<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Models\Production;

class OngoingProductions extends Component
{

    public $productions;

    public function mount()
    {
        $this->productions = Production::where('status','ongoing')->get();
    }

    public function render()
    {
        return view('livewire.production.ongoing-productions');
    }
}
