<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Models\Production;

class OngoingProductions extends Component
{

    public $productions;

    public function mount()
    {
        $productions = Production::where('status','ongoing')->get();
        // dd($productions);
        $this->productions = $productions;
    }

    public function render()
    {
        return view('livewire.production.ongoing-productions');
    }
}
