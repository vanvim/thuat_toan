<?php
// sắp xếp nổi bọt
function sapxep($a = array())
{
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i+1; $j< $n; $j++){
            if ($a[$i] >= $a[$j]){
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    return $a;
}
$a = array(1, 2, 3, 44, 5, 6, 2, 33, 55, 78, 34, 6667, 8890, 45);
$b = sapxep($a);
var_dump($b);


?>

