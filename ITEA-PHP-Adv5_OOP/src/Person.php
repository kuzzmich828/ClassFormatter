<?php

require_once __DIR__ . '/Exception/ImpossiblePersonAgeException.php';

class Person
{
    const MAX_POSSIBLE_AGE = 150;

    private $email;
    private $age;
    private static $oldest = 0;

    public static function getOldestAge()
    {
        return self::$oldest;
    }

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function setAge($age)
    {
        if ($age > self::MAX_POSSIBLE_AGE) {
            throw new ImpossiblePersonAgeException('Impossible person age');
        }

        if ($age > self::$oldest) {
            self::$oldest = $age;
        }

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
