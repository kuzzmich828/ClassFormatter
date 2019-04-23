#!/usr/bin/env php
<?php

require_once __DIR__ . '/../src/Factory/Boss.php';
require_once __DIR__ . '/../src/Factory/RobotEmployee.php';
require_once __DIR__ . '/../src/Factory/HumanEmployee.php';

$boss = new Boss();

$boss->addEmployee(new HumanEmployee());
$boss->addEmployee(new HumanEmployee());
$boss->addEmployee(new RobotEmployee());
$boss->addEmployee(new HumanEmployee());
$boss->addEmployee(new RobotEmployee());

$boss->startWorkingDay();