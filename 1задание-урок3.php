<?php
$a = 4;
$b = -7;
$c = 0;
if($a == $c xor $b == $c){
    echo ("0");
} elseif($a < $c && $b < $c){
    echo ($a - $b);
} elseif($a > $c && $b > $c){
    echo($a * $b);
} elseif($a < $c && $b > $c){
    echo ($a + $b);
} elseif($a > $c && $b < $c){
    echo ($a + $b);
}




