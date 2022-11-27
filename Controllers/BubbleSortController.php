<?php

require_once(__DIR__ . '/../Controllers/Components/SortersComponent.php');

/* Method: Works by examining each set of adjacent elements in the string, from left to right, 
switching their positions if they are out of order. The algorithm then repeats this process until 
it can run through the entire string and find no two elements that need to be swapped.
*/

class BubbleSortController extends SortersComponent
{

    public function bubble_sort($randomArray)
    {

        for ($counter = 0; $counter < count($randomArray); $counter++) {
            for ($num = 0; $num < count($randomArray) - 1; $num++) {
                $length = $num + 1;
                $first = $randomArray[$num];

                if ($randomArray[$length] < $first) {
                    $temp = $first;
                    $randomArray[$num] = $randomArray[$length];
                    $randomArray[$length] = $temp;
                }
            }
        }

        return $randomArray;
    }

}