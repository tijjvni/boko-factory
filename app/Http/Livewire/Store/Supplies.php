<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

use App\Models\Supply;

class Supplies extends Component
{

    public $supplies;

    public function mount()
    {
        $supplies = Supply::all();
        $this->supplies = $supplies;
    }

    public function render()
    {
        return view('livewire.store.supplies');
    }
}
