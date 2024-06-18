<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindMinController extends Controller
{
    #public function findMinimum()
    public function findMinimum()
    {
        $n = 10;
        $a = array_fill(0, $n, 0);

        for ($i = 0; $i < $n; $i++) {
            $a[$i] = rand(1, 100);
        }

        $min_num = $a[0];
        $max_num = $a[0];
        $imin_num = 0;
        $imax_num = 0;

        for ($i = 1; $i < $n; $i++) {
            if ($a[$i] < $min_num) {
                $min_num = $a[$i];
            }

            if ($a[$i] > $max_num) {
                $max_num = $a[$i];
            }

            if ($a[$i] < $a[$imin_num]) {
                $imin_num = $i;
            }

            if ($a[$i] > $a[$imax_num]) {
                $imax_num = $i;
            }
        }

        $min_index = $imin_num;
        $max_index = $imax_num;

        return ['a' => $a, 'min_num' => $min_num, 'max_num' => $max_num, 'min_index' => $min_index, 'max_index' => $max_index]; 
    }
}   