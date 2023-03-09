<?php

/**
 * The Factory Method pattern is a creational design pattern that allows us to create objects without
 * specifying the exact class of object that will be created. Instead of creating objects directly using the new keyword,
 * we define an interface (or an abstract class) that specifies how to create objects, and let subclasses decide which
 * class to instantiate.
 */

interface PaymentMethod {
    public function pay();
}

class CreditCard implements PaymentMethod {
    public function pay() {
        // code to pay using credit card
    }
}

class PayPal implements PaymentMethod {
    public function pay() {
        // code to pay using PayPal
    }
}

abstract class PaymentMethodFactory {
    abstract protected function createPaymentMethod(): PaymentMethod;

    public function doPayment() {
        $paymentMethod = $this->createPaymentMethod();
        $paymentMethod->pay();
    }
}

class CreditCardFactory extends PaymentMethodFactory{
    protected function createPaymentMethod(): PaymentMethod {
        return new CreditCard();
    }
}

class PayPalFactory extends PaymentMethodFactory {
    protected function createPaymentMethod(): PaymentMethod {
        return new PayPal();
    }
}

$creditCardFactory = new CreditCardFactory();
$creditCardFactory->doPayment(); // creates a CreditCard object and calls its pay() method

$payPalFactory = new PayPalFactory();
$payPalFactory->doPayment(); // creates a PayPal object and calls its pay() method


/**
 * In this example, we have two concrete classes CreditCard and PayPal that both implement the PaymentMethod interface,
 * which specifies the pay() method that must be implemented.

We also have an abstract class PaymentMethodFactory that defines a factory method createPaymentMethod()
 * that returns an object of type PaymentMethod. It also defines a method doPayment() that calls the
 * createPaymentMethod() method to create the object and then calls its pay() method.

Finally, we have two concrete factories, CreditCardFactory and PayPalFactory, that both inherit from the
 * PaymentMethodFactory class and implement the createPaymentMethod() method to create a CreditCard or PayPal object,
 * respectively.

Using this pattern, we can create an instance of CreditCardFactory or PayPalFactory, and then call the doPayment()
 * method to create and use a CreditCard or PayPal object, respectively:


 * This way, we can easily add new payment methods by creating a new subclass of PaymentMethodFactory and implementing
 * the createPaymentMethod() method to return a new type of PaymentMethod. This makes our code more extensible
 * and maintainable.
 */