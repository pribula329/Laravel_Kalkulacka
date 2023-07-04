<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Calculator $calculator){
        return view('calculator', ['operacie'=> $calculator->getOperacie()]);
    }

    public function vypocet(Calculator $calculator){
        $a = request()->input('cislo1');
        $b = request()->input('cislo2');
        $operation = request()->input('operacia');
        $result = $calculator->vypocet($operation, $a, $b);

        return view('calculator', [
            'operacie' => $calculator->getOperacie(),
            'vysledok' => $result,
            'cislo1' => $a,
            'cislo2' => $b
        ]);
    }
}
