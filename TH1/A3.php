<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

$tableData = array_merge(['Tên khóa học'], $arrs);
$numRows = 5;
$numColumns = 1;

echo "<table border='1'>";
for ($row = 1; $row <= $numRows; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= $numColumns; $col++) {
        $index = ($row - 1) * $numColumns + ($col - 1);
        echo "<td>" . $tableData[$index] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
