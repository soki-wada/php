<?php

function addNumber($num1, $num2){
    $add = $num1 + $num2;
    return $add;
}

$total = addNumber(2, 3);
echo $total, "<br>";

function addScore($score1, $score2, $score3){
    $add = $score1 + $score2 + $score3;
    if ($add > 210){
        echo "合計点は".$add."なので合格です";
    }else{
        echo "合計点は".$add."なので不合格です";
    }
}

$value = addScore(100, 100, 0);
echo $value;
echo "<br>";

//三角形
function areaTriangle($bottom, $height){
    $area = $bottom * $height / 2;
    return $area;
}

echo areaTriangle(10, 5);
echo "<br>";

//四角形
function areaSquare($width, $height){
    $area = $width * $height;
    return $area;
}

echo areaSquare(10, 5);
echo "<br>";

//台形
function areaTrapezoid($upper_line, $lower_line, $height){
    $area = ($upper_line + $lower_line) * $height / 2;
    return $area;
}

echo areaTrapezoid(10, 5, 4);
echo "<br>";