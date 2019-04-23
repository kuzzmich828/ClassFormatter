<?php

require_once __DIR__ . '/AbstractEmployee.php';

class HumanEmployee extends AbstractEmployee
{
    const LUNCH_DURATION = 60;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function pause($minutes = self::LUNCH_DURATION)
    {
        echo \sprintf("[%s] Go to lunch for %s...\n", \spl_object_id($this), $minutes);
    }

    public function getName()
    {
        return $this->name;
    }
}
