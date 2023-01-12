<?php


require 'pokerDice.php';


class Game {

private $totalThrows = 0;

public function throw5dices() {
    $dicesThrown = array();
    
    for ($i = 1; $i <= 5; $i++) {
        array_push($dicesThrown, new PokerDice);
        $dicesThrown[$this->totalThrows]->throw();
        echo"<p>";
        echo $dicesThrown[$this->totalThrows]->shapeName();
        echo"</p>";
        $this->totalThrows++;
    }
}

public function getTotalThrows (){
    return $this->totalThrows;
}
/*
* Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
* A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades 
* entre tots els daus.
*/

}


?>