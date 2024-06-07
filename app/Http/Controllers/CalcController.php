<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function div(int $a, int $b)
    {
        return response()->json(
            ["result" => $a / $b]
        );
    }
}
