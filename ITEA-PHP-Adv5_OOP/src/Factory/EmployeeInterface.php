<?php

interface EmployeeInterface
{
    public function startWork();

    public function pause($minutes = 60);
}
