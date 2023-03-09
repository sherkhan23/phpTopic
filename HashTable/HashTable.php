<?php

/**
 *A hash table (also known as a hash map) is a data structure that stores key-value pairs.
 * It uses a hash function to compute an index into an array of buckets, from which the desired value
 * can be found. Here's an example implementation of a hash table in PHP:
 */

class HashTable {
    private $hashArray = array();
    private $size;

    public function __construct($size) {
        $this->size = $size;
    }

    private function hashFunction($key) {
        return hash('sha256', $key) % $this->size;
    }

    public function put($key, $value) {
        $index = $this->hashFunction($key);
        $this->hashArray[$index][$key] = $value;
    }

    public function get($key) {
        $index = $this->hashFunction($key);

        if (isset($this->hashArray[$index][$key])) {
            return $this->hashArray[$index][$key];
        } else {
            return null;
        }
    }

    public function remove($key) {
        $index = $this->hashFunction($key);

        if (isset($this->hashArray[$index][$key])) {
            unset($this->hashArray[$index][$key]);
        }
    }
}

/**
 *The HashTable class has three methods for inserting, getting, and removing key-value pairs.
 * It uses a hash function to compute the index into the array of buckets, and stores each key-value pair in
 * the corresponding bucket.

To use this implementation, you can create a new HashTable object with a specified size, and use the put()
 * method to insert key-value pairs, the get() method to retrieve values by their keys, and the remove()
 * method to remove key-value pairs:
 */

$ht = new HashTable(10);

$ht->put('name', 'John');
$ht->put('age', 30);
$ht->put('city', 'New York');

var_dump($ht->get('name')); // output: string(4) "John"
var_dump($ht->get('age')); // output: int(30)

$ht->remove('city');

var_dump($ht->get('city')); // output: NULL
