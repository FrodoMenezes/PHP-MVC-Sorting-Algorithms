<?php

    class BubbleSort {

        // Gives a 1-10 random numbers to the array
        public function randomArr() {
            for ($i = 0; $i<10; $i++) {
                $numbers[]=rand(1,100);
            }
            return $numbers;
        }

        public function bubble_sort($numbers) {
            
            for ($i = 0; $i<10; $i++) {
                $numbers[]=rand(1,100);
            }
            
            for ($counter = 0; $counter < count($numbers); $counter++) {
                for ($num = 0; $num < count($numbers)-1; $num++) {
                    $length = $num + 1;
                    $first = $numbers[$num];

                    if ($numbers[$length] < $first) {
                        $temp = $first;
                        $numbers[$num] = $numbers[$length];
                        $numbers[$length] = $temp;
                    }
                }
            }
        
            return $numbers;
        }
    }
