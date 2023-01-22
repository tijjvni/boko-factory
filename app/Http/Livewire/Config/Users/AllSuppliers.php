<?php

namespace App\Http\Livewire\Config\Users;

use Livewire\Component;

use App\Models\Supplier;

class AllSuppliers extends Component
{

    public $suppliers;
    public $allSuppliers;
    public $allSuppliersWithSupplies;

    public function mount()
    {
        $this->suppliers = Supplier::with('person')->get();
        $this->allSuppliers = Supplier::count();
        $this->allSuppliersWithSupplies = Supplier::has('supplies')->count();

    }

    public function render()
    {
        return view('livewire.config.users.all-suppliers');
    }
}
