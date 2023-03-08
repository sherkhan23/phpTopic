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

    public function save() {
        // save order to the database
    }

    public function sendConfirmationEmail() {
        // send confirmation email to the customer
    }

    public function calculateTotal() {
        // calculate the total price of the order
    }
}

// In this example, the Order class is responsible for three things - saving the order to the database,
// sending a confirmation email to the customer, and calculating the total price of the order.
// This violates the Single Responsibility principle because the class has multiple responsibilities.