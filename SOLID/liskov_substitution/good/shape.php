<?php

abstract class Shape {
    abstract public function area();
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square extends Shape {
    protected $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area() {
        return $this->length * $this->length;
    }
}


/**
 *In this revised code, we have introduced an abstract base class Shape that defines the common behavior for all shapes.
 * The Rectangle and Square classes both inherit from Shape and implement the area() method, allowing them to be used
 * interchangeably. This ensures that the code follows the Liskov Substitution principle and can be extended without
 * introducing unexpected behavior or breaking assumptions.
 */