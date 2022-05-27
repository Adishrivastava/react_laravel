<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Get extends Controller
{
    public function index()
    {
        return response()->json([
            'status'=> 200,
            'students'=>"How ur doin!",
        ]);
    }

}