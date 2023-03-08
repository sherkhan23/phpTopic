<?php

class Database {
    public function connect() {
        // code to connect to the database
    }
}

class UserService {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function getUser($id) {
        $this->database->connect();
        // code to get user from the database
    }
}

/**
 *In this example, the UserService depends directly on the Database class, which is a low-level module.
 * This creates a tight coupling between the two classes, making it difficult to change the implementation
 * of the Database class without affecting the UserService class.
 */