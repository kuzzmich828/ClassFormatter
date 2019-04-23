<?php

include __DIR__.'/AbstractFormatter.php';

class Serialize extends AbstractFormatter
{

    private $class;

    public function __construct($class_object)
    {
        $this->class = $class_object;
    }

    private function getClassStructure()
    {
        serialize($this->class);

        return $class_structure;
    }

    public function getObjectJSON()
    {
        $this->getJSON($this->getClassStructure());
    }

    public function getObjectYAML()
    {
        $this->getYAML($this->getClassStructure());
    }

    public function getObjectXML()
    {
        $this->getXML($this->getClassStructure());
    }
}