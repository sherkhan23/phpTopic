<?php

Class Test
{
    public function io(){
        $ioInt = (int)readline('Enter an integer: ');
        echo " integer: ", $ioInt,"\n";
        $ioString = readline('Enter an string: ');
        echo "string: ", $ioString, "\n";
    }

    public function string()
    {
        echo "length of a string: ", strlen("Hello world!"); // outputs 1
        echo "\n";
        echo "count of words: ",str_word_count("Hello world!"); // outputs 2
        echo "\n";
        echo "reverse word: ",strrev("Hello world!"); // outputs !dlrow olleH
        echo "\n";
        echo "find word, and return starting position: ",strpos("Hello world!", "world"); // outputs 6
        echo "\n";
        echo "replace specific word: ", str_replace("world", "Dolly", "Hello world!"), "\n";; // outputs Hello Dolly!
    }

    function arrays(){
        $cars = array("Volvo", "BMW", "Toyota");
        echo "Cars: " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".". "\n";
        echo "Count array: ", count($cars), "\n";

        echo "Throw foreach: ";
        foreach ($cars as $car){
            echo $car, " ";
        }

    }
}

$test = new Test();
//$test->io();
//$test->string();
$test->arrays();






