<?php
//giải phương trình bậc 2 ax^2 + bx+cx =0
function giaiPTBac1($a, $b)
{
    if ($a == 0) {
        return "Phương trình vô nghiệm";
    } else {
        return -$b / $a;
    }
}

function giaiPTBac2($a, $b, $c)
{
    if ($a == 0) {
        return giaiPTBac1($b, $c);
    } else {
        if ($b == 0){
            if ($c == 0){
                return "Phương trình vô số nghiệm";
            }else{
                return "Phương trình vô nghiệm";
            }
        }
        else{
            $deta = $b*$b - 4*$a*$c;
            if ($deta < 0)
             return "Phuowg trình vô nghiệm";
            else{
                $nghiem = array();
                $nghiem['x1'] = (-$b -sqrt($deta))/2*$a;
                $nghiem['x2'] = (-$b +sqrt($deta))/2*$a;
                return $nghiem;
            }
        }
    }
}
$nghiem = giaiPTBac2(1,1,4);
var_dump($nghiem);