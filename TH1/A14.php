<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

$result = array();
foreach ($array1 as $key => $value) {
    $result[$key][] = $array2[$key];
    foreach ($value as $element) {
        $result[$key][] = $element;
    }
}

// Hiển thị kết quả
print_r($result);

?>