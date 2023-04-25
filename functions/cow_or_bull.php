<?php

namespace CowOrBull;

function isCow($inputArray, $secretArray)
{
    $cow = 0;
    $bull = 0;


    foreach ($inputArray as $index => $input) {
        if ($input == $secretArray[$index]) {
            $bull++;
            unset($inputArray[$index]);
            unset($secretArray[$index]);
        }

    }
    foreach ($inputArray as $index => $input) {
        foreach ($secretArray as $indexSecret => $secret) {
            if ($input == $secret) {
                $cow++;
                unset($inputArray[$index]);
                unset($secretArray[$indexSecret]);
                break;
            }
        }
    }


    return [$cow, $bull];
}
