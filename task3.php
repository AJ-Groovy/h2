<!-- Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).

Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) -
 имя 'John', возраст 25, зарплата 1000.

Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. -->

<?php
class Worker {
    public $name;
    public $age;
    public $salary;    
}

$vasya = new Worker();
$vasya->name = 'Vasya';
$vasya->age = 26;
$vasya->salary = 2000;

$john = new Worker();
$john->name = 'John';
$john->age = 25;
$john->salary = 1000;

echo $vasya->salary + $john->salary;
echo '<br>';
echo $vasya->age + $john->age;