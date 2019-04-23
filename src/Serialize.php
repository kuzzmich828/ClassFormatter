<?php

include __DIR__.'/AbstractFormatter.php';

class Serialize extends AbstractFormatter
{

    private $class;

    /**
     * Serialize constructor.
     * @param $class_object
     * Constructor convert properties of object to array
     */
    public function __construct($class_object)
    {
        $this->class = get_object_vars($class_object);
    }

    public function getObjectJSON()
    {
        return $this->convertJSON($this->class);
    }

    public function getObjectYAML()
    {
        return $this->convertYAML($this->class);
    }

    public function getObjectXML()
    {
        return $this->convertXML($this->class);
    }


}