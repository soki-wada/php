<?php
$a = 5;
if ($a === 5){
    echo "\$aは5です。";
}

echo "<br>";

$a = 7;
if ($a === 5){
    echo "\$aは5です。";
}else{
    echo "\$aは5以外です";
}

echo "<br>";

$a = 7;
if ($a === 5){
    echo "\$aは5です。";
}elseif ($a === 7) {
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}

echo "<br>";

$result = ($a === 7) ? "True" : "False";
echo $result;