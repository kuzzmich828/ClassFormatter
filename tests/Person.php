<?php

class Person {

    const MAX_POSSIBLE_AGE = 150;

    public $email;
    public $age;

    public function __construct($email, $age)
    {
        $this->email = $email;
        $this->age = $age;
    }

}
