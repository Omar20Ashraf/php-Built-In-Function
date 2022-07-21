<?php 


// str_repeat();

/* 
    Function Accept 3 Parameters
    $string = String to repeat [Mandatory]
    $repeats = Repeats Count  [Optional], Default is 2
    $separator = separator between repeats  [Optional], Default is false

*/

function string_repeat(string $str, int $repeats =2, bool $separator=false)
{
    # code...
    $result = '';

    $separator = $separator ? ' ' : '';

    for($i=1; $i<=$repeats; $i++){

        $result.= $str . $separator;
    }

    return $result;
}

// echo string_repeat('Repeat',3,' ');