<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 4</title>
</head>
<body>
<?php
// Lấy tham số từ URL, ví dụ: bai4.php?x=56&y=5
$x = isset($_GET["x"]) ? (int)$_GET["x"] : 0;
$y = isset($_GET["y"]) ? (int)$_GET["y"] : 0;

echo "x = " . $x . "<br/>";
echo "y = " . $y . "<br/><br/>";

// Các phép toán
echo "x + y = " . ($x + $y) . "<br/>";
echo "x - y = " . ($x - $y) . "<br/>";

// Kiểm tra tránh chia cho 0
if ($y != 0) {
    echo "x / y = " . ($x / $y) . "<br/>";
} else {
    echo "x / y = Không thể chia cho 0<br/>";
}

echo "x * y = " . ($x * $y) . "<br/>";
if ($y != 0) {
    echo "x % y = " . ($x % $y) . "<br/>";
} else {
    echo "x % y = Không thể chia cho 0<br/>";
}

// So sánh
echo "x == y : " . (($x == $y) ? "true" : "false") . "<br/>";
echo "x != y : " . (($x != $y) ? "true" : "false") . "<br/>";
echo "x > y  : " . (($x > $y) ? "true" : "false") . "<br/>";
echo "x < y  : " . (($x < $y) ? "true" : "false") . "<br/>";
echo "x >= y : " . (($x >= $y) ? "true" : "false") . "<br/>";
echo "x <= y : " . (($x <= $y) ? "true" : "false") . "<br/>";
?>
</body>
</html>
