<?php

include "strpos.php";

// str_contains(string $haystack, string $needle): bool

/* 
    Function Accept 2 Parameters
        haystack
        The string to search in.

        needle
        The substring to search for in the haystack.

*/

function string_contain(string $haystack,string $needle):bool
{
    # code...

    return string_pos($haystack, $needle) !== false ? true : false;
}