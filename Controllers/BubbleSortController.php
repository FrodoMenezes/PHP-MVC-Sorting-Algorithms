<?php

    class BubbleSortController {

        // Gives a 1-10 random numbers to the array
        public function randomArrayWithTenNumber() {
            for ($i = 0; $i < 10; $i++) {
                $randomArrayNumbers[] = rand(1,100);
            }
            
            return $randomArrayNumbers;
        }

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
