<?php 


// count();

/* 
    Function Accept 2 Parameters,
            return int.

    array  $givenArray. => required
    mode = COUNT_NORMAL => optional
*/

function array_count(array $givenArray,int $mode = COUNT_NORMAL):int
{
    # code...
    $count = 0;
    
    if($mode == COUNT_RECURSIVE){
        
        foreach ($givenArray as $element):
            $count = count_inside_array($element,$count);
            $count++;
        endforeach;

    }else
        foreach ($givenArray as $element)
            $count++;
    
    
    return $count;
}

function count_inside_array($elementArray,$count)
{
    # code...
    if (is_array($elementArray)) {

        foreach ($elementArray as $internal_element) :
                
            $count = count_inside_array($internal_element,$count);
            $count++;
        endforeach;
    }
    return $count;
}

// $food = array(
//     'fruits' => array('orange', 'banana', 'apple' => array('carrot', 'collard', 'pea' => array('carrot', 'collard', 'pea'))),
//     'veggie' => array('carrot', 'collard', 'pea')
// );

// echo 'Normal Count '.array_count($food). '<br>';
// echo 'Normal Count '.count($food). '<br>';

// echo 'Recursive Count '.array_count($food, COUNT_RECURSIVE) . '<br>';
// echo 'Recursive Count '.count($food, COUNT_RECURSIVE) . '<br>';