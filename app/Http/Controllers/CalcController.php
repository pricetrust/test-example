<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function div(float $a, float $b)
    {
        return response()->json(
            ["result" => $a / $b]
        );
    }

    // public function mul(int $a, int $b)
    // {
    //     return response()->json(
    //         ["result" => $a * $b]
    //     );
    // }
}
