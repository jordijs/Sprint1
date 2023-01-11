<?php

require 'pokerDice.php';
/*
* Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
* A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades 
* entre tots els daus.
*/


$dice = new PokerDice;

$dice->throw();
$dice->shapeName();
var_dump($dice)

?>