<?php

class SortersComponent
{

    // Gives a 1-10 random numbers to the array
    public function randomArrayWithTenNumber()
    {
        for ($i = 0; $i < 10; $i++) {
            $randomArrayNumbers[] = rand(1, 100);
        }

        return $randomArrayNumbers;
    }

    // Gives the runtime
    public function microTimeFloat()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float) $usec + (float) $sec);
    }

}