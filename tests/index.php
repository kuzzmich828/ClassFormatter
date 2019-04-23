<?php

include __DIR__ . '/Person.php';
include __DIR__ . '/../src/Serialize.php';

$obj = new Person('john@example.com', 31);

$serialize = new Serialize($obj);

echo "JSON Format:\n";
echo $serialize->getObjectJSON();
echo "\n";

echo "YAM Format:\n";
echo $serialize->getObjectYAML();
echo "\n";


echo "XML Format:\n";
echo $serialize->getObjectXML();