<?php
function isPanagram($sentenceToCheck)
{

    $sentenceToCheckLoweredAndTrimmed = strtolower(trim($sentenceToCheck));
    $alphabet = str_split("abcdefghijklmnopqrstuvwxyz");

    foreach ($alphabet as $letter) {
        if (!strstr($sentenceToCheckLoweredAndTrimmed, $letter)) {
            echo 'false';
            return false;
        }

    }
    echo 'true';
    return true;

}

$input = readline();
isPanagram($input);
?>