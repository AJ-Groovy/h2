<?php

abstract class User
{
    abstract public function increaseRevenue(int $amount): void;
}

class Employee extends User
{
    private $revenue = 0;

    public function increaseRevenue(int $amount): void
    {
        $tax = $amount * 0.1;
        $this->revenue += $amount - $tax;
    }

    public function getRevenue(): int
    {
        return $this->revenue;
    }
}

class Student extends User
{
    private $revenue = 0;

    public function increaseRevenue(int $amount): void
    {
        $this->revenue += $amount;
    }

    public function getRevenue(): int
    {
        return $this->revenue;
    }
}
