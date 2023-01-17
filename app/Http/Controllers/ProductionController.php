<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests\StartProductionRequest;


use App\Models\Production;

class ProductionController extends Controller
{
    //


    const INDEX_SUCCESS_MESSAGE = 'All productions retreived.';
    const STORE_SUCCESS_MESSAGE = 'Production started.';

    public function index()
    {
        return response()->json([
            "status" => "success",
            "message" => Self::INDEX_SUCCESS_MESSAGE,
            "data" => [
                'id' => 1,
                'name' => 'Tj',
            ]
        ],Response::HTTP_OK);
    }

    public function store(Request $request)
    {

        return response()->json([
            "status" => "success",
            "message" => Self::STORE_SUCCESS_MESSAGE,
            "data" => $request->collect()
        ],Response::HTTP_CREATED);
    }


}
