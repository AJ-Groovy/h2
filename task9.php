<?php
$csv = file(__DIR__ . '/cats.csv');

function gen_csv_data($file_array) {
    for ( $i = 0; $i < count($file_array); $i++ ) {
        yield '<pre>' . print_r(explode(',', $file_array[$i]), true) . '</pre>';
    }
}

$generator = gen_csv_data($csv);

foreach ( $generator as $value ) {
    echo "$value\n";
}

?>
