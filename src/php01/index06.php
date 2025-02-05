<?php

for ($i = 0; $i < 5; $i++){
    echo $i;
}
echo "<br>";

for ($i = 1; $i <= 5; $i++){
    echo $i * 2, "<br>";
}


$i = 0;
while ($i < 3){
    echo "i = ". $i, "<br>";
    $i += 1;
}

$count = 0;
while ($count < 20){
    $count += 1;
    echo $count, "<br>";
}

$count = 0;
while ($count <= 100){
    if($count % 3 === 0){
        $count += 1;
        continue;
    }elseif($count === 20){
        break;
    }
    echo $count, "<br>";
    $count += 1;
}

$i = 0;
do{
    echo $i, "<br>";
    $i++;
}while($i < 5);

$num = 0;
do{
    echo "num = ". $num, "<br>";
    $num ++;
}while($num <= 2);

for($i = 1; $i <= 50; $i++){
    if($i % 3 === 0 and $i % 5 !== 0){
        echo "Fizz", "<br>";
    }elseif($i % 3 !== 0 and $i % 5 === 0){
        echo "Buzz", "<br>";
    }elseif($i % 3 === 0 and $i % 5 === 0){
        echo "FizzBuzz", "<br>";
    }else{
        echo $i, "<br>";
    }
}

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
        echo "○";
    }
    echo "<br>";
}