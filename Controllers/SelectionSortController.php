<?php

require_once(__DIR__ . '/../Controllers/Components/SortersComponent.php');

/* Method: The smallest element is selected from the unsorted array and swapped with the leftmost element, 
and that element becomes a part of the sorted array. This process continues moving unsorted array 
boundary by one element to the right.

NOTE: This algorithm is not suitable for large data sets as its average and worst case complexities 
are of Ο(n2), where n is the number of items.
*/

class SelectionSortController extends SortersComponent
{

    public function selection_sort($randomArray)
    {

        for ($counter = 0; $counter < count($randomArray); $counter++) {
            $min = null;
            $minKey = null;

            for ($num = $counter; $num < count($randomArray); $num++) {
                if (null === $min || $randomArray[$num] < $min) {
                    $minKey = $num;
                    $min = $randomArray[$num];
                }
            }
            $randomArray[$minKey] = $randomArray[$counter];
            $randomArray[$counter] = $min;
        }

        return $randomArray;
    }

}