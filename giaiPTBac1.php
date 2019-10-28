<?php
//giải phương trình bậc 1 ax+b = 0
function giaiPTBac1($a, $b)
{
    if ($a == 0) {
        return "Phương trình vô nghiệm";
    } else {
        return -$b / $a;
    }
}

$x = giaiPTBac1(3, 1);
echo $x;
