<?php
function timKiemNhoNhat($a = array())
{
    $min = $a[0];
    $n = count($a);
    for ($i = 0; $i <= $n - 1; $i++) {
        if ($a[$i] <= $min) {
            $max = $a[$i];
        }
    }
    return $max;
}

$a = array(1, 2, 3, 44, 5, 6, 2, 33, 55, 78, 34, 6667, 8890, 45);
$min = timKiemLonNhat($a);
echo 'Số lớn nhất trong mảng là :' . $min;
?>