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

    function quickSort($array) {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        } else {
            $pivot = $array[0];
            $left = $right = array();

            for ($i = 1; $i < count($array); $i++) {
                if ($array[$i] < $pivot) {
                    $left[] = $array[$i];
                } else {
                    $right[] = $array[$i];
                }
            }

            return array_merge($this->quickSort($left), array($pivot), $this->quickSort($right));
        }
    }

    function mergeSort($array) {
        $length = count($array);

        if ($length == 1) {
            return $array;
        }

        $midpoint = (int) ($length / 2);

        $left = array_slice($array, 0, $midpoint);
        $right = array_slice($array, $midpoint);

        $left = $this->mergeSort($left);
        $right = $this->mergeSort($right);

        return $this->merge($left, $right);
    }

    function merge($left, $right) {
        $result = array();

        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        while (count($left) > 0) {
            $result[] = array_shift($left);
        }

        while (count($right) > 0) {
            $result[] = array_shift($right);
        }

        return $result;
    }


}

$sort = new Sorts();
$array = array(3, 0, 2, 5, -1, 4, 1);
//print_r($sort->quickSort($array));
print_r($sort->mergeSort($array));
//$sort->bubbleSort($array);


//$sort->insertionSort($array);