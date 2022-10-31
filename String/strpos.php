<?php

include ('strlen.php');

function string_pos(string $haystack,string $needle)
{
    # code...
    $hayLen = string_count($haystack);
    $needLen = string_count($needle);

    if ($hayLen < $needLen)
        return false;

    for ($i = 0; $i < $hayLen; $i++) {
        $temp = '';

        for ($j = 0; $j < $needLen; $j++) {

            $temp = $temp . $haystack[$j + $i];

            if ($temp == $needle)
                return $i;
        }
    }
    return false;
}