<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/../src/Serialize.php';
require_once __DIR__ . '/../src/FormatterException.php';

$obj = null;//new Person('john@example.com', 31);



$serialize = new Serialize($obj);

echo "JSON Format:\n";
echo $serialize->getObjectJSON();
echo "\n";

echo "YAM Format:\n";
echo $serialize->getObjectYAML();
echo "\n";


echo "XML Format:\n";
echo $serialize->getObjectXML();