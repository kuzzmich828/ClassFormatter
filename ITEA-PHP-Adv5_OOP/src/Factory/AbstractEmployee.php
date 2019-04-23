<?php

require_once __DIR__ . '/EmployeeInterface.php';

abstract class AbstractEmployee implements EmployeeInterface
{
    public function startWork()
    {
        echo sprintf("[%s] Started work...\n", \spl_object_id($this));
    }

    public function pause($minutes = 60)
    {
        echo \sprintf("[%s] Paused work for %s...\n", \spl_object_id($this), $minutes);
    }

    abstract public function getName();
}
