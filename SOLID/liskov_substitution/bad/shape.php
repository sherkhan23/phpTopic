<?php

class Rectangle {
    protected $width;
    protected $height;

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function setWidth($width) {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
        $this->width = $height;
    }
}


/**
 *In this example, the Square class is a subclass of the Rectangle class, and it overrides the setWidth()
 * and setHeight() methods to ensure that the width and height are always equal. However, this violates
 * the Liskov Substitution principle because a Square cannot be used interchangeably with a Rectangle -
 * a Rectangle can have different widths and heights, while a Square cannot.
 */