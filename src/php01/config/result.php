<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set_item = htmlspecialchars($_POST['set_item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo '私の名前は、'. $name, "<br>";
echo 'ご希望の商品は、'. $set_item, "<br>";
echo '注文数は、'. $number;