<?php

use App\Http\Controllers\ProductionController;
use App\Http\Requests\METHOD_Caller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Faker\faker;

use Symfony\Component\HttpFoundation\Response;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('can fetch all productions', function () {
    $user = $this->authenticate();


    $req = new METHOD_Caller(ProductionController::class,'index',request(),[]);

    $response = $req->call();        
    expect($response->status())->toBe(Response::HTTP_OK);

    $response = $response->getOriginalContent();
    expect($response['message'])->toBe(ProductionController::INDEX_SUCCESS_MESSAGE);
  
});
