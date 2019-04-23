<?php

include __DIR__.'/AbstractFormatter.php';

class Serialize extends AbstractFormatter
{

    private $class;

    public function __construct($class_name)
    {
        $this->class = $class_name;
    }

    private function getClassStructure()
    {
        $vars = get_class_vars($this->class);
        $methods = get_class_methods($this->class);

        $class_structure = new stdClass();
        $class_structure->properties = $methods;
        $class_structure->methods = $vars;

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