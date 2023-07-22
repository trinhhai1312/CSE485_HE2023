<?php
function convertToLowercase($arr)
{
    foreach ($arr as &$element) {
        if (is_string($element)) {
            $element = strtolower($element);
        }
    }
    return $arr;
}

$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];
$result1 = convertToLowercase($arrs1);
$result2 = convertToLowercase($arrs2);

var_dump($result1);
var_dump($result2);
?>
