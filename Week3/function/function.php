<?php
function timSoNhoNhat($a, $b, $c) {
    return min($a, $b, $c);
}

// Test hàm
echo "=== TÌM SỐ NHỎ NHẤT TRONG 3 SỐ ===\n\n";

$so1 = 5;
$so2 = 2;
$so3 = 8;

echo "Ba số cần so sánh: $so1, $so2, $so3\n";
echo "Số nhỏ nhất là: " . timSoNhoNhat($so1, $so2, $so3) . "\n\n";

echo "--- Các test case khác ---\n";
echo "Số nhỏ nhất của (10, 3, 15): " . timSoNhoNhat(10, 3, 15) . "\n";
echo "Số nhỏ nhất của (-5, 0, 3): " . timSoNhoNhat(-5, 0, 3) . "\n";
echo "Số nhỏ nhất của (7, 7, 7): " . timSoNhoNhat(7, 7, 7) . "\n";
?>