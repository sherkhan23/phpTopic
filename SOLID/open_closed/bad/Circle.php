<?php

// In this example, the Circle class is responsible for calculating the area, perimeter,
// and diameter of a circle. If we want to add support for other shapes.php, such as squares
// or triangles, we would need to modify the Circle class.

class Circle {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }

    public function diameter() {
        return 2 * $this->radius;
    }
}
