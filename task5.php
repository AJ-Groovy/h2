<?php

abstract class User
{
    abstract public function increaseRevenue(int $amount);
}

class Employee extends User
{
    private $revenue = 0;

    public function increaseRevenue(int $amount)
    {
        $tax = $amount * 0.1;
        $this->revenue += $amount - $tax;
    }

    public function getRevenue()
    {
        return $this->revenue;
    }
}

class Student extends User
{
    private $revenue = 0;

    public function increaseRevenue(int $amount)
    {
        $this->revenue += $amount;
    }

    public function getRevenue()
    {
        return $this->revenue;
    }
}
