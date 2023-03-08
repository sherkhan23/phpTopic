<?php

/**
In this revised code, the Circle and Square classes both inherit from the Shape class,
 * which defines the common behavior for all shapes.php. If we want to add support for other shapes.php,
 * such as triangles, we can create a new class that inherits from Shape and implements the area()
 * and perimeter() methods. This allows us to extend the behavior of our code without modifying the Shape class,
 * making our code more maintainable and easier to understand.
 */

abstract class Shape {
    abstract public function area();
    abstract public function perimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Square extends Shape {
    private $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area() {
        return $this->length * $this->length;
    }

    public function perimeter() {
        return 4 * $this->length;
    }
}


