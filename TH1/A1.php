<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// Tính tổng các phần tử
function sum($array) {
    return array_sum($array);
}

// Tính tích các phần tử
function multiply($array) {
    return array_product($array);
}

// Tính hiệu các phần tử
function subtract($array) {
    $result = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        $result -= $array[$i];
    }
    return $result;
}

// Tính thương các phần tử
function divide($array) {
    $result = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] != 0) {
            $result /= $array[$i];
        } else {
            // Xử lý chia cho 0 nếu có
            echo "Không thể chia cho 0.";
            return null;
        }
    }
    return $result;
}

// Tính và hiển thị kết quả
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . sum($arrs) . "<br>";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . multiply($arrs) . "<br>";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . subtract($arrs) . "<br>";

// Kiểm tra nếu có phép chia cho 0 thì hiển thị thông báo, nếu không thì tính và hiển thị kết quả
if (in_array(0, $arrs)) {
    echo "Thương các phần tử = Không thể chia cho 0.";
} else {
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . divide($arrs);
}
?>
