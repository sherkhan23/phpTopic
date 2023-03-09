<?php

/**
 *the Chain of Responsibility pattern is a behavioral pattern that allows an object to pass a request
 * down a chain of objects until it is handled by an object that can fulfill it.

In this pattern, each object in the chain has a reference to the next object in the chain, forming a linked list.
 * When an object receives a request, it can either handle the request itself or pass it on to the next object in the chain.

An example of the Chain of Responsibility pattern in PHP might be a series of authentication handlers,
 * each responsible for checking a different aspect of a user's credentials. For example, one handler might check
 * the username, another might check the password, and a third might check the user's role.
 */

abstract class AuthenticationHandler {
    protected $successor;

    public function setSuccessor(AuthenticationHandler $successor) {
        $this->successor = $successor;
    }

    abstract public function authenticate($username, $password);
}

class UsernameHandler extends AuthenticationHandler {
    public function authenticate($username, $password) {
        if ($username == "admin") {
            return true;
        } else {
            if ($this->successor != null) {
                return $this->successor->authenticate($username, $password);
            } else {
                return false;
            }
        }
    }
}

class PasswordHandler extends AuthenticationHandler {
    public function authenticate($username, $password) {
        if ($password == "password") {
            return true;
        } else {
            if ($this->successor != null) {
                return $this->successor->authenticate($username, $password);
            } else {
                return false;
            }
        }
    }
}

class RoleHandler extends AuthenticationHandler {
    public function authenticate($username, $password) {
        // Check the user's role
        // ...

        if ($this->successor != null) {
            return $this->successor->authenticate($username, $password);
        } else {
            return false;
        }
    }
}

// Usage:
$usernameHandler = new UsernameHandler();
$passwordHandler = new PasswordHandler();
$roleHandler = new RoleHandler();

$usernameHandler->setSuccessor($passwordHandler);
$passwordHandler->setSuccessor($roleHandler);

$authenticated = $usernameHandler->authenticate("admin", "password");

/**
 * n this example, the AuthenticationHandler abstract class defines the basic structure of the chain, including a
 * reference to the next object in the chain ($successor) and an abstract authenticate method that each handler
 * must implement.

The UsernameHandler, PasswordHandler, and RoleHandler classes each implement the authenticate method to check
 * a different aspect of the user's credentials. If a handler can authenticate the user, it returns true; otherwise,
 * it passes the request on to the next handler in the chain.

The setSuccessor method is used to link the handlers together into a chain, with the $successor property
 * of each handler set to the next handler in the chain.

Finally, the authenticate method of the first handler in the chain ($usernameHandler) is called with the user's
 * credentials, triggering the chain of handlers to authenticate the user in turn. If all handlers in the chain
 * fail to authenticate the user, the authenticate method of the final handler in the chain returns false,
 * indicating that the authentication attempt failed.
 */
