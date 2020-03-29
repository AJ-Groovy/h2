<?php

class User
{
    private $name;
    private $age;
    private $email;

    public function __call($name, $arguments)
    {
        if (!method_exists($this, $name)) {
            echo $name . ' - Method does not exist <br>';
        } else {
            $this->$name(implode(',', $arguments));
        }
    }

    private function setName(string $name)
    {
        $this->name = $name;
    }

    private function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAll()
    {
        return $this->name . ' - ' . $this->age . ' - ' . $this->email;
    }
}

$usr = new User();

$usr->setAge(12);
$usr->setName('Teeeest');
echo $usr->getAll();
