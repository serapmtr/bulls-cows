<?php

namespace PrintLine;

use function CowOrBull\isCow;

function printLines($randomNumber, $input)
{
    $result = "Grade: ";

    $inputArray = array_map("intval", str_split($input));

    $randomArray = array_map("intval", str_split($randomNumber));



    echo $input . "\n";
    $return = isCow($inputArray, $randomArray);

    if ($return[0] > 0 && $return[1] > 0) {
        $result .= $return[0] . " cow(s) and " . $return[1] . " bull(s). The secret code is $randomNumber.";
    } else if($return[0] == 0 && $return[1] == 0)  {
        $result .= "None. The secret code is $randomNumber.";
    } else {
        if ($return[0] > 0) {
            $result .= $return[0] . " cow(s) ";
        }
        if ($return[1] > 0) {
            $result .= $return[1] . " bull(s) ";

            if ($return[1] == strlen($input)) {
                $result .= "\nCongratulations! You guessed the secret code.";
            }
        }
    }


    echo $result . "\n";

    return $return[1];
}
