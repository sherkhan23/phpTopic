<?php

/**
 * The Singleton pattern is a creational design pattern that ensures that only one instance of a class can be created,
 * and provides a global point of access to that instance.
 */

class Database {
    private static $instance;

    private function __construct() {
        // code to connect to database
    }

    public static function getInstance(): Database {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function query($sql) {
        // code to execute a SQL query
    }
}

$database = Database::getInstance();
$database->query("SELECT * FROM users");

//  общий доступ к базе данных из разных частей программы).

/**
 *In this example, we have a class Database that has a private constructor, which ensures that the class
 * can only be instantiated from within the class itself.

We also have a private static property $instance that holds the single instance of the Database class.

The getInstance() method is a static method that checks whether the $instance property has been set, and if not,
 * creates a new instance of the Database class using the private constructor.

Finally, we have a public method query($sql) that can be used to execute a SQL query using the database connection.

To use this class, we can call the getInstance() method to get the single instance of the Database class,
 * and then use its query($sql) method to execute SQL queries:
 */

/**
 *we can ensure that there is only one instance of the Database class, which can be accessed from anywhere in our code.
 * This pattern is useful in situations where we need to ensure that only one instance of a class exists,
 * such as database connections, logging systems, or configuration settings.
 */