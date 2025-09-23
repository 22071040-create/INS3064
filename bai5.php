<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 5</title>
</head>
<body>
<?php

http://localhost:8000/bai5.php?x=5&y=5


$x = isset($_GET["x"]) ? (int)$_GET["x"] : 0;
$y = isset($_GET["y"]) ? (int)$_GET["y"] : 0;

echo "$x + $y = " . ($x + $y) . "<br/>";
echo "$x - $y = " . ($x - $y) . "<br/>";


if ($y != 0) {
    echo "$x / $y = " . ($x / $y) . "<br/>";
    echo "$x % $y = " . ($x % $y) . "<br/>";
} else {
    echo "$x / $y = Không thể chia cho 0<br/>";
    echo "$x % $y = Không thể chia cho 0<br/>";
}

echo "$x * $y = " . ($x * $y) . "<br/><br/>";


echo "$x == $y : " . (($x == $y) ? "true" : "false") . "<br/>";
echo "$x != $y : " . (($x != $y) ? "true" : "false") . "<br/>";
echo "$x <  $y : " . (($x < $y) ? "true" : "false") . "<br/>";
echo "$x >  $y : " . (($x > $y) ? "true" : "false") . "<br/>";
echo "$x <= $y : " . (($x <= $y) ? "true" : "false") . "<br/>";
echo "$x >= $y : " . (($x >= $y) ? "true" : "false") . "<br/>";
?>
</body>
</html>
