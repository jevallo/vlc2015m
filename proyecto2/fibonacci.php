<?php
/**
 * Return Fibonacci serie in array
 * 
 * @param integer $max
 * @return array
 */
function fibonacci($max)
{

    $f0 = 0;
    $f1 = 1;
    $f2 = $f0 + $f1;
    //echo "F= 0, 1, ";
    $serie[0] = 0;
    $serie[1] = 1;
    $i = 2;
    $res = 0;
    while ($f2 <= $max) {
        //echo $f2 . ",";
        $serie[$i] = $f2;
        $f0 = $f1;
        $f1 = $f2;
        $f2 = $f1 + $f0;      
        $i++;
    }
    return $serie;
}



