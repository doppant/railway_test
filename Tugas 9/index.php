<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->get_name(); // "shaun"
echo "<br>";
echo "Legs : " . $sheep->get_legs(); // 4
echo "<br>";
echo "cold blooded : ". $sheep->get_cold_blooded(); // "no"
echo "<br>";
echo "<br>";

$sungkong = new Ape("kera sakti");
echo "Name : " . $sungkong->get_name();         
echo "<br>";
echo "legs : ".$sungkong->get_legs();         
echo "<br>";
echo "cold blooded : ".$sungkong->get_cold_blooded();  
echo "<br>";
echo "Yell : ".$sungkong->yell(); 
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name();        
echo "<br>";
echo "legs : ".$kodok->get_legs();        
echo "<br>";
echo "cold blooded".$kodok->get_cold_blooded(); 
echo "<br>";
echo "Jump : ".$kodok->jump(); 
echo "<br>";

?>