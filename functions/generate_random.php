<?php

namespace Random;

function random($length, $possible)
{
    $str =  "0123456789abcdefghijklmnopqrstuvwxyz";
    $secret = "";
    $i = 0;

    while ($i < $length) {
        $digit = $str[random_int(0, $possible)];

        if (!str_contains($secret, $digit)) {
            $secret .= $digit;
        } else {
            $length++;
        }

        $i++;
    }

    return $secret;
}
