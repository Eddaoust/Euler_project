<?php
/*
    The prime factors of 13195 are 5, 7, 13 and 29.
    What is the largest prime factor of the number 600851475143 ?
 */

function checkPrime($n){
    for ($x = 2; $x <= $n/2; $x++) {
        if ($n % $x == 0){
            return false;
        }
    }
    return true;
}

function largestPrimeFactor($num){
    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            $prime = $num / $i;
            if(checkPrime($prime)){
                echo $prime;
                break;
            }
        }
    }
}


largestPrimeFactor(600851475143);
