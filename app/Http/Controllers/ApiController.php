<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return view('Dashboard.Api.smallest_positive_integer');
    }

    public function calculate(Request $request)
    {
        $array = array_map('intval', explode(',', $request->array));
        $smallest = 9999999;
        foreach ($array as $value){
            if($value > 0 && $value < $smallest)
                $smallest = $value;
        }
        return response()->json($smallest);
    }
}
