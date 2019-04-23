<?php

abstract class AbstractFormatter
{
    public function getJSON($array){
        echo "JSON Format: ";
        echo json_encode($array);
        echo "\n";
    }

    public function getYAML($array){
        echo "YAM Format: ";
        echo json_encode($array);
        echo "\n";
    }

    public function getXML($array){
        echo "XML Format: ";
        echo json_encode($array);
        echo "\n";
    }
}