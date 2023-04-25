<?php

use function \Length\isSame;
use function PrintLine\printLines;
use function Random\random;

require_once("functions/cow_or_bull.php");
require_once("functions/is_same_length.php");
require_once("functions/print.php");
require_once("functions/generate_random.php");

$turn = 0;
$turning = 1;
$result = "The secret code is prepared: ";

echo "Input the length of the secret code: \n";
$length = readline("> ");


if (intval($length) == 0 || count(explode(" ", $length)) > 1) {
    echo "Error: '$length' isn't a valid number.";
    return;
}

echo "Input the number of possible symbols in the code: \n";
$strLength = readline("> ");

if (intval($strLength) == 0) {
    echo "Error: '$strLength' isn't a valid number.";
    return;
}

if ($strLength < $length) {
    echo "Error: it's not possible to generate a code with a length of $length with $strLength unique symbols.";
    return;
}

if ($strLength > 36) {
    echo "Error: maximum number of possible symbols in the code is 36 (0-9, a-z).";
    return;
}

for($i = 0; $i < $length; $i++) {
    $result .= "*";
}

echo $result . ".\n";


echo "Okay, let's start a game!\n";

$randomNumber = random(length: $length, possible: $strLength);



while ($turn != $length) {
    echo "Turn " . $turning . ":\n";
    $input = readline("> ");
    if (isSame($randomNumber, $input)) {
        $turn = printLines($randomNumber, $input) . "\n";
        $turning++;
   } else {
        return;
    }
}
