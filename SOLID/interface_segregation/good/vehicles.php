<?php

interface Engine {
    public function startEngine();
    public function stopEngine();
}

interface Acceleration {
    public function accelerate();
}

interface Braking {
    public function brake();
}

class Car implements Engine, Acceleration, Braking {
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

class Motorcycle implements Engine, Acceleration {
    public function startEngine() {
        // code to start engine
    }

    public function stopEngine() {
        // code to stop engine
    }

    public function accelerate() {
        // code to accelerate
    }
}


/**
 *In this revised code, we have split the Vehicle interface into three smaller interfaces: Engine, Acceleration, and
 * Braking. The Car class implements all three interfaces, while the Motorcycle class only implements Engine and
 * Acceleration. This ensures that each class only depends on the methods that it actually needs, and makes our
 * code more modular and easier to maintain.
 */