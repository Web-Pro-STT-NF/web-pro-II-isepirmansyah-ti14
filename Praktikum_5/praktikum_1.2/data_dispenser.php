<?php
include_once "class_dispenser.php";
$minuman1 = new Minuman("Teh", 2000);
$minuman1->isiUlangGalon(2500);
echo "<br>";
$minuman1->hasilDispenser();
echo "<br>";
$minuman1->cetak();
echo "<br>";
$minuman1->isiGelas();
echo "<br>";
$minuman1->isiUlangGelas(5);
echo "<br>";
$minuman1->hasilDispenser();