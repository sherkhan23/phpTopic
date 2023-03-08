<?php

interface Vehicle {
    public function startEngine();
    public function stopEngine();
    public function accelerate();
    public function brake();
}

class Car implements Vehicle {
    public function startEngine() {
        // code to start engine
    }

    public function stopEngine() {
        // code to stop engine
    }

    public function accelerate() {
        // code to accelerate
    }

    public function brake() {
        // code to brake
    }
}

class Motorcycle implements Vehicle {
    public function startEngine() {
        // code to start engine
    }

    public function stopEngine() {
        // code to stop engine
    }

    public function accelerate() {
        // code to accelerate
    }

    public function brake() {
        // code to brake
    }
}

/**
 *In this example, the Vehicle interface defines four methods: startEngine(), stopEngine(), accelerate(), and brake().
 * However, not all vehicles necessarily have the same functionality - for example, a motorcycle may not have a brake
 * pedal.
 */
