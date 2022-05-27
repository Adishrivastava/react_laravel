<?php

namespace App\Http\Controllers\API;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GetText extends Controller
{
    public function index()
    {
        return response()->json([
            'status'=> 200,
            'students'=>"How ur doin!",
        ]);
    }

}