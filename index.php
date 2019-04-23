<?php

include __DIR__.'/ITEA-PHP-Adv5_OOP/bin/console.php';
include __DIR__.'/Classes/Serialize.php';


$obj = new Person('john@example.com');
$john->setAge(31);

$serialize = new Serialize($obj);

$serialize->getObjectJSON();
$serialize->getObjectYAML();
$serialize->getObjectXML();
