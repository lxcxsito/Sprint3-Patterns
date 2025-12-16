<?php

include 'Tigger.php';


$tigger1 = Tigger::getInstance();
$tigger1 -> roar();
$tigger1 -> roar();
echo $tigger1 -> getCounter();

?>