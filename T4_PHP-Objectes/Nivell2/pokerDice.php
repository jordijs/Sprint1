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

    private $throwValue;
    private $result;


    public function throw() {

        $this->throwValue = rand (0,5);

        return $this->throwValue;
        //tirar el dau, és a dir, genera un valor 
        //aleatori per a l'objecte a què se li aplica el mètode.
    }

    public function shapeName() {

        switch ($this->throwValue) {
            case 0:
                $this->result = "As";
                break;
            case 1:
                $this->result = "K";
                break;
            case 2:
                $this->result = "Q";
                break;
            case 3:
                $this->result = "J";
                break;
            case 4:
                $this->result = "7";
                break;
            case 5:
                $this->result = "8";
                break;
        }
        
        //que digui quina és la figura que ha sortit en l'última 
        //tirada del dau en qüestió.

        $output = "La figura que ha sortit és " . $this->result;

        return $output;
    }
}



?>