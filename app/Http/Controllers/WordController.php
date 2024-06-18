<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function declineWord()
    {
        $y = rand(1, 100);
        $word = 'студент';

        if ($y % 10 == 1 && $y % 100 != 11){
            $word = 'студент';
        
        }elseif (in_array($y % 10, [2, 3, 4]) && !in_array($y % 100, [12, 13, 14])){
            $word.= 'а';
        }
        else{
            $word .= 'ов';
        }    
        return "Количество человек: $y" .' ' . "$word" ;
    }   
}