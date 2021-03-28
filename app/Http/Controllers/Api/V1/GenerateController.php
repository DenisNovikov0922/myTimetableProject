<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class GenerateController extends Controller
{
    public function store(Request $request)
    {
        
        return response(null, 204);
    }
}
