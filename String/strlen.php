<?php

// strlen(string $string): int

/* 
    Function Accept 1 Parameters
            return int
    $string = String to count

*/

function string_count(string $str)
{
    # code...
    $count = 0;
    while(!empty($str[$count]))
        $count++;

    return $count;
}

// echo string_count('count');