<?php

require_once __DIR__ . '/AbstractEmployee.php';

class RobotEmployee extends AbstractEmployee
{
    const MODEL = 'MODEL-v3';

    public function getName()
    {
        return self::MODEL;
    }
}
