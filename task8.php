<?php
class CsvIterator implements Iterator {
    private $iteration = 0;
    private $csv_data;

    public function __construct($csv) {
        $this->csv_data = file($csv);
    }

    public function rewind() {
        $this->iteration = 0;
    }

    public function current() {
        $current = explode(',',$this->csv_data[$this->iteration]);
        return '<pre>' . print_r($current, true) . '</pre>';
    }

    public function key() {
        return $this->iteration;
    }

    public function next() {
        ++$this->iteration;
    }

    public function valid() {
        return isset($this->csv_data[$this->iteration]);
    }
}

$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}
?>
