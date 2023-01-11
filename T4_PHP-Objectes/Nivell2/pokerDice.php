<?php

/* Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures:
* As, K, Q, J, 7 i 8.
* Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor 
* aleatori per a l'objecte a què se li aplica el mètode.
* Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última 
* tirada del dau en qüestió.
* Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
* A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades 
* entre tots els daus.
*/


class PokerDice {


    public function throw() {

        $throwValue = rand (0,5);

        return $throwValue;
        //tirar el dau, és a dir, genera un valor 
        //aleatori per a l'objecte a què se li aplica el mètode.
    }

    public function shapeName($throwValue) {
        $result = "";

        switch ($throwValue) {
            case 0:
                $result = "As";
            case 1:
                $result = "K";
            case 2:
                $result =b"Q";
            case 3:
                $result = "J";
            case 4:
                $result = "7";
            case 5:
                $result = "8";
        }
        
        //que digui quina és la figura que ha sortit en l'última 
        //tirada del dau en qüestió.

        $output = "La figura que ha sortit és " . $result;

        return $output;
    }
}



?>