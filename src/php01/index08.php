<?php

$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br>";
echo $people[0];
echo "<br>";

$people = array(
    'person1' => 'Taro', 'person2' => 'Jiro', 'person3' => 'Saburo'
);
var_dump($people);
echo "<br>";
echo $people['person2'];
echo "<br>";

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
echo $people[0]["age"];
echo "<br>";
foreach($people as $person){
    foreach($person as $key => $info){
        echo "<pre>";
        echo $key. '='. $info;
        echo "</pre>";
    }
}

foreach($people as $person){
        echo $person["first_name"]. "(". $person["age"]. "歳". $person["gender"]. ")";
}