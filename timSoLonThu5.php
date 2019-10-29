<?php
// sắp xếp nổi bọt
function sapxep($a = array(),$x = 0)
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
                    $max = $a[$i];
                }
            }
    }
    return array(
        'items' => $a,
        'x' => $x,
        'max' => $max,

    );
}

$a = array(1, 78, 45, 2, 3, 44, 5, 6, 2,78,78, 33, 55, 78, 34, 6667, 8890, 45);
$b = sapxep($a,4);
echo '<pre>';
print_r($b);
echo '</pre>';

?>

