<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumOddElements(){
        $n = [1, 2, 3, 4, 5, 6, 7, 8 , 9, 10];

        $sum_num = [];

        foreach($n as $i){
            if ($i %2 != 0){
                $sum_num = $i;
            }
        }
        return $sum_num;

    }
    
}