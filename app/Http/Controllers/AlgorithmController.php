<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmController extends Controller
{
    public function countCharacters(Request $request)
    {
    $text = $request->input('text');
    $charCount = [];

    foreach (count_chars($text, 1) as $key => $value) 
    {
        $charCount[chr($key)] = $value;
    }
    return response()->json($charCount);
    }

    


    public function findMinimum(Request $request)
    {
        $numbers = $request->input('numbers');
        $min = $numbers[0];

        foreach($numbers as $number){
            if($number < $min){
                $min = $number;
            }
        }
        return response()->json(['min' => $min]);
    }




    public function sumOddElements(Request $request)
    {
        $number = $request->input('numbers');
        $sum = 0;

        foreach($number as $num){
            if($num % 2!= 0){
                $sum += $num;
            }
        }
        return response()->json(['sum' => $sum]);
    }


    public function declineWord(Request $request)
    {
        $x = $request->input('x');
        $word = 'студент';

        if ($x % 10 == 1 && $x % 100 != 11){
            $word = 'студент';
        
        }elseif (in_array($x % 10, [2, 3, 4]) && !in_array($x % 100, [12, 13, 14])){
            $word .= 'а';
        }
        else{
            $word .= 'ов';
        }

        return response()->json(['word' => $word]);
    }
}