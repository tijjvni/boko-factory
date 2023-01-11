<?php

namespace App\Http\Livewire\Production;

use Livewire\Component;

use App\Http\Controllers\ProductionController;
use App\Http\Requests\METHOD_Caller;

class Index extends Component
{

    public function mount()
    {
        $req = new METHOD_Caller(
            ProductionController::class,
            'index',
            request(),
            [
                'Field1' => 'something',
                'Field2' => 'something else',
            ]
        );
        $response = $req->call();        

        // dd($req->formatted($response));

    }

    public function render()
    {
        return view('livewire.production.index');
    }
}
