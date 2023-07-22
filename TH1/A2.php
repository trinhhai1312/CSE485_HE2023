<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$template = "Màu %s là màu yêu thích của %s";
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

if (count($arrs) != count($names)) {
    echo "Số lượng màu và số lượng tên không khớp.";
} else {
    $result = array();
    for ($i = 0; $i < count($arrs); $i++) {
        $result[] = sprintf($template, $arrs[$i], $names[$i]);
    }
    $final_result = implode(', ', $result);
    echo $final_result;
}
?>
