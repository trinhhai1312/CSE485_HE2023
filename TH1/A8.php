<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$longestString = $array[0];
$shortestString = $array[0];

foreach ($array as $string) {
    if (strlen($string) > strlen($longestString)) {
        $longestString = $string;
    }

    if (strlen($string) < strlen($shortestString)) {
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = " . strlen($longestString) . "<br>";
echo "Chuỗi nhỏ nhất là $shortestString, độ dài = " . strlen($shortestString) . "<br>";
?>
