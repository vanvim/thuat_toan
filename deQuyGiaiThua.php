<?php
function deQuyGiaiThua($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return deQuyGiaiThua($n - 1) * $n;
    }
}

$n = 9;
$giaiThua = deQuyGiaiThua($n);
echo 'Tổng của ' . $n . ' số liên tiếp là : ' . $giaiThua;