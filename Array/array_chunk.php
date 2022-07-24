<?php

include 'count.php';

// array_chunk(array $array, int $length, bool $preserve_keys = false): array;
// Chunks an array into arrays with length elements. The last chunk may contain less than length elements.

/* 
    Function Accept 3 Parameters return Array
    array    $givenArray.
    boolean  $length The size of each chunk.
    preserve_keys When set to true keys will be preserved. Default is false which will reindex the chunk numerically
*/

function chunk_array(array $givenArray, int $length ,bool $preserve_keys = false)
{
    # code...
    $result = [];
    $created_array_num = 0;
    $created_element_num = 0;

    while($created_array_num < $length){

        $inside_array = [];

        while(array_count($inside_array) < $length){

            if($preserve_keys){
                $inside_array[$created_element_num] = $givenArray[$created_element_num];
            }else{
                $inside_array[] = $givenArray[$created_element_num];
            }

            $created_element_num++;
        }

        $result[] = $inside_array;

        $created_array_num++;
    }

    $inside_array = [];

    while($created_element_num < array_count($givenArray)){

        if ($preserve_keys) {
            $inside_array[$created_element_num] = $givenArray[$created_element_num];
        } else {
            $inside_array[] = $givenArray[$created_element_num];
        }


        $created_element_num++;
    }

    $result[] = $inside_array;

    return $result;
    
}

echo "<pre>";
print_r(chunk_array([1, 3, 5, 7, 9],2));
echo "</pre>";