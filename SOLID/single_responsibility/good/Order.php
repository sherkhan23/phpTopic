<?php

class Order {
    private $id;
    private $items;
    private $customer;

    public function __construct($id, $items, $customer) {
        $this->id = $id;
        $this->items = $items;
        $this->customer = $customer;
    }

    public function calculateTotal() {
        // calculate the total price of the order
    }
}

class OrderRepository {
    public function save(Order $order) {
        // save order to the database
    }
}

class OrderMailer {
    public function sendConfirmationEmail(Order $order) {
        // send confirmation email to the customer
    }
}

/**
    In this revised code, the Order class is responsible only for representing an order,
     * the OrderRepository class is responsible for persisting the order to the database,
     * and the OrderMailer class is responsible for sending confirmation emails to the customer.
     * Each class has only one responsibility, making the code more maintainable and easier to understand.
 **/

