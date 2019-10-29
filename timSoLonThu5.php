<?php
// sắp xếp nổi bọt
function sapxep($a = array(),$x)
{
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($a[$i] <= $a[$j]) {
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    $m =0;
    $max = $a[0];
    for ($i = 0; $i < $n - 1; $i++) {
            if ($a[$i] > $a[$i+1] ) {
                $m ++ ;
                if ($m == $x){
                    $max = $a[$i+1];
                }
            }
    }
    return array(
        'items' => $a,
        'max' => $max
    );
}

$a = array(1, 78, 45, 2, 3, 44, 5, 6, 2,78,78, 33, 55, 78, 34, 6667, 8890, 45);
$b = sapxep($a,5);
echo '<pre>';
print_r($b);
echo '</pre>';


?>

