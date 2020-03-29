<!-- Сделайте класс Worker, в котором будут следующие private поля - name (имя), age(возраст), salary (зарплата).

Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст, зп) ).

Сделайте также public методы getName, getAge, getSalary.

Создайте объект этого класса 'Jack', возраст 25, зарплата 1000.

Сделайте валидацию на пол возраст. Рабочий может быть только полнолетним, в противном случае мы не создаем объект

Выведите на экран произведение его возраста и зарплаты.  -->
<?php
class Worker {
    private $name;
    private $age;
    private $salary;    

    public function __construct(string $name, int $age, float $salary) {
        if ($age < 18) {
            throw new Exception("Worker must be an adult");
        }
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getSalary(): float {
        return $this->salary;
    }
}

try {
    $usr = new Worker('Jack', 25, 1000);
    echo $usr->getAge() * $usr->getSalary();
} catch(Exception $e) {
   echo $e->getMessage();
}
