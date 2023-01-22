<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Http\Controllers\ProductionController;
use App\Http\Requests\METHOD_Caller;

use App\Models\Production;
use App\Models\Order;
use App\Models\Material;

class Index extends Component
{
    public $ongoingProduction;
    public $materialsRunningLow;
    public $orders;

    public function mount()
    {
        // $req = new METHOD_Caller(
        //     ProductionController::class,
        //     'index',
        //     request(),
        //     [
        //         'Field1' => 'something',
        //         'Field2' => 'something else',
        //     ]
        // );
        // $response = $req->call();        

        $this->ongoingProduction = Production::whereStatus('ongoing')->count();
        $this->materialsRunningLow = Production::whereColumn('msl', '>=', 'quantity')->count();
        $this->orders = Order::whereStatus('pending')->count();

    }

    public function render()
    {
        return view('livewire.production.index');
    }
}
