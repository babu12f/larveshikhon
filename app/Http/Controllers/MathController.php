<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($num1, $num2)
    {
        $result = $num1 + $num2;

        $data = [ 'name' => "nawshad", "rool" => 120, "phone"=> "0181881881", "adddress"=> "dhaka" ];

        return view('sum', compact('result', 'data'));
    }

    public function sub()
    {
        return view('sub');
    }
}
