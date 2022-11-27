<?php

require_once(__DIR__.'/../Controllers/Components/SortersComponent.php');

class BubbleSortController extends SortersComponent {

    public function bubble_sort($randomArray) {
        
        for ($counter = 0; $counter < count($randomArray); $counter++) {
            for ($num = 0; $num < count($randomArray)-1; $num++) {
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
