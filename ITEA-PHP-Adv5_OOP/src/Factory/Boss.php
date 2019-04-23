<?php

require_once __DIR__ . '/EmployeeInterface.php';

class Boss
{
    /**
     * @var EmployeeInterface[]
     */
    private $employees = [];

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function startWorkingDay()
    {
        foreach ($this->employees as $employee) {
            $employee->startWork();
        }

        // TODO: some logic...

        foreach ($this->employees as $employee) {
            $employee->pause();
        }
    }
}
