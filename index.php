<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

$kodok = new Frog("buduk");
$kodok->set_legs(4);

$sungokong = new ape("kera sakti");


echo $sheep->name . '<br>'; // "shaun"
echo $sheep->legs . '<br>'; // 2
echo $sheep->cold_blooded . '<br>' ;// false 

echo $kodok->name . '<br>'; // "shaun"
echo $kodok->legs . '<br>'; // 2
echo $kodok->cold_blooded . '<br>'; // false
$kodok->jump(); // "hop hop"
echo '<br>';
echo $sungokong->name . '<br>'; // "shaun"
echo $sungokong->legs . '<br>'; // 2
echo $sungokong->cold_blooded . '<br>' ;// false
$sungokong->yell() . '<br>';// "Auooo"

?>