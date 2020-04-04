<?php
$csv = file(__DIR__ . '/cats.csv');

function gen_one_to_three($file_array) {
    for ( $i = 0; $i < count($file_array); $i++ ) {
        yield '<pre>' . print_r(explode(',', $file_array[$i]), true) . '</pre>';
    }
}

$generator = gen_one_to_three($csv);

foreach ( $generator as $value ) {
    echo "$value\n";
}

?>
