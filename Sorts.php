<?php

class Sorts
{
    public function bubbleSort($array){
        $arrayCount = count($array);

        for ($i = 0; $i < $arrayCount; $i++){
            for ($j = 0; $j < $arrayCount; $j++){
                if ($array[$j] > $array[$i]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        print_r( $array);
    }

    public function insertionSort($array){
        for ($i = 1; $i < count($array); $i++) {
            $temp = $array[$i];
            $j = $i - 1;
            while ($temp < $array[$j] && $j >= 0) {
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
                $j--;
            }
        }
        print_r( $array);
    }
}

$sort = new Sorts();
$array = [3, 3, 6, 7, 2, 7, 9];
$sort->bubbleSort($array);
//$sort->insertionSort($array);