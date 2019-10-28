<?php
function deQuyTinhTong($n)
{
    if ($n < 1) {
        return $n;
    } else {
        return deQuyTinhTong($n - 1) + $n;
    }
}

$n = 9;
$tong = deQuyTinhTong($n);
echo 'Tổng của ' . $n . ' số liên tiếp là : ' . $tong;
