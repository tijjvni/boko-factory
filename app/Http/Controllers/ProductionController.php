<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Production;

class ProductionController extends Controller
{
    //


    const INDEX_SUCCESS_MESSAGE = 'All productions retreived.';

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


}
