<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị từ mảng
$maxValue = max($numbers);
$minValue = min($numbers);
$sumValues = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
$ascendingValues = $numbers;
sort($ascendingValues);

$descendingValues = $numbers;
rsort($descendingValues);

// Sắp xếp mảng theo chiều tăng và giảm các key
$ascendingKeys = $numbers;
ksort($ascendingKeys);

$descendingKeys = $numbers;
krsort($descendingKeys);

// Hiển thị kết quả
echo "Phần tử đầu tiên trong mảng: " . $firstElement . "<br>";
echo "Phần tử cuối cùng trong mảng: " . $lastElement . "<br>";

echo "Số lớn nhất trong mảng: " . $maxValue . "<br>";
echo "Số nhỏ nhất trong mảng: " . $minValue . "<br>";
echo "Tổng các giá trị trong mảng: " . $sumValues . "<br>";

echo "Mảng được sắp xếp tăng dần theo giá trị: ";
print_r($ascendingValues);

echo "Mảng được sắp xếp giảm dần theo giá trị: ";
print_r($descendingValues);

echo "Mảng được sắp xếp tăng dần theo key: ";
print_r($ascendingKeys);

echo "Mảng được sắp xếp giảm dần theo key: ";
print_r($descendingKeys);

?>