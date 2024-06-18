<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CharactersCountController extends Controller
{
    public function countCharacters()
    {
        $input_string = "Hello, World!";
        $result = $this->countCharactersInString($input_string);

        foreach ($result as $char => $count) {
            echo "Character '$char' occurs $count times <br>";
        }
    }

    private function countCharactersInString($input_string)
    {
        $characters_count = array();

        for($i = 0; $i < strlen($input_string); $i++) {
            $char = $input_string[$i];
            if (array_key_exists($char, $characters_count)) {
                $characters_count[$char] += 1;
            } else {
                $characters_count[$char] = 1;
            }
        }

        return $characters_count;
    }
}
?>