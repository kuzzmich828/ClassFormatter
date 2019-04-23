<?php

abstract class AbstractFormatter
{
    /**
     * @param $array
     * Encode array to JSON
     */
    public function convertJSON($array){
        return json_encode($array);
    }

    /**
     * @param $array
     * Encode array to YAML
     */
    public function convertYAML($array){
        return yaml_emit($array);
    }

    /**
     * @param $array
     * Encode array to XML
     */
    public function convertXML($array){
        return $this->xml_encode($array);
    }

    /**
     * @param $array
     * @return mixed
     * Engine for convert array to XML using SimpleXML
     */
    private function xml_encode($array){
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($array, array ($xml, 'addChild'));
        return $xml->asXML();
    }
}