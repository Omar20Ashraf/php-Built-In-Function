<?php 


// array_reverse();

/* 
    Function Accept 2 Parameters return Array
    array    $givenArray.
    boolean  $preserveKey if true the element will keep it is key value.
*/

function reverse_array(array $givenArray, bool $preserveKey=false )
{
    # code...
    $reversedArray = array();

    for($i = count($givenArray); $i>0; $i--){
        if($preserveKey)
            $reversedArray[$i-1] = $givenArray[$i-1];
        
    }

    return $reversedArray;
}

echo "<pre>";
print_r(reverse_array([1, 3, 5, 7, 9],true));
echo "</pre>";