<?php
$a = 15;
$b = 3;
$c = 10;
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
echo $a % $c, "<br>";

$d = 5;
$c %= $b;//1
$d %= $b;//2
$c += $d;//3
echo $c, "<br>";
echo $a, "<br>";

$a = 20;
$b = 5;
echo ($a > $b), "<br>";

echo ($a > 10 and $a < 30), "<br>";

$a = 10;
$b = 10;
$c = 5;
$d = 5;
echo ++$a, "<br>";
echo $b++, "<br>";
echo --$c, "<br>";
echo $d--, "<br>";