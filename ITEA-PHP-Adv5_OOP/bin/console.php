<?php

require_once __DIR__ . '/../src/Person.php';
require_once __DIR__ . '/../src/Exception/ImpossiblePersonAgeException.php';

$john = new Person('john@example.com');
$john->setAge(31);

//echo $john->getEmail() . ' '. $john->getAge() . \PHP_EOL;

$p2 = new Person('second@example.com');
$p2->setAge(18);

$p3 = new Person('third@example.com');
$p3->setAge(54);

$mark = new Person('mark@example.com');

//try {
//    $mark->setAge(151);
//} catch (ImpossiblePersonAgeException $e) {
//    echo "You are trying to assign impossible age for person John\n";
//}

//echo $mark->getEmail() . ' ' . $mark->getAge() . \PHP_EOL;

//echo Person::getOldestAge() . \PHP_EOL;
