<?php

include __DIR__.'/ITEA-PHP-Adv5_OOP/bin/console.php';
include __DIR__.'/Classes/Serialize.php';

$serialize = new Serialize('Person');

$serialize->getObjectJSON();
$serialize->getObjectYAML();
$serialize->getObjectXML();
