<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operator = $request->input('operator');

        if ($operator == '+') {
            $result = $number1 + $number2;
        } elseif ($operator == '-') {
            $result = $number1 - $number2;
        } else {
            $result = "Operação não suportada";
        }

        return view('calculator', ['result' => $result]);
    }
}