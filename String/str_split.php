<?php

include 'strlen.php';

// str_split(string $string, int $length = 1): array

/* 
    Function Accept 2 Parameters -- return array

    $string = String to convert [Mandatory]
    $length = Maximum length of the chunk. [Optional]

*/

function string_split(string $str,int $length=1):array
{
    # code...
    $string_array = [];
    $inside_string= '';

    for($i=0; $i< string_count($str); $i++):

        $inside_string = $str[$i];

        if($length > 1){

            for($y=1; $y< $length; $y++){
                $i++;
                $inside_string .= $str[$i];
            }
        }
        
        $string_array[] = $inside_string;
    endfor;

    return $string_array;
}


// echo "<pre>";
// print_r(string_split('omar',2)); 
// echo "</pre>";