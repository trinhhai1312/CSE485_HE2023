<?php
function convertToUpperCase($arr) {
    $result = array();
    foreach ($arr as $item) {
        if (is_string($item)) {
            $result[] = strtoupper($item);
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

$arrs1 = ['a', 'b', 'ABC'];
$arrs2 = ['1', 'b', 'c', 'd'];
$arrs3 = ['a', 0, null, false];

$convertedArr1 = convertToUpperCase($arrs1);
$convertedArr2 = convertToUpperCase($arrs2);
$convertedArr3 = convertToUpperCase($arrs3);

echo "Kết quả với mảng 1: \n";
print_r($convertedArr1);

echo "Kết quả với mảng 2: \n";
print_r($convertedArr2);

echo "Kết quả với mảng 3: \n";
print_r($convertedArr3);
?>
