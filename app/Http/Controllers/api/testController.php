<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
        return response()->json(['error'=>'error']);
    }
}
