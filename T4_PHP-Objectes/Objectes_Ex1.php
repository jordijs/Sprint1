<?php
/*Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode
initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print 
que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 
6000, paga impostos).*/

class Employee{
    //Attributes
    public $name = "";
    public $income = 0;

    //Methods
    public function initialize($name, $income){
        $this->name = $name;
        $this->income = $income;
    }

    public function print($name, $income){
        echo $this->name;
        if (($this->income) > 6000) {
            return "Paga impostos";
        } else {
            return "No paga impostos.";
        }
    }

}


$employee1 = new Employee();

echo $employee1->initialize("Jordi", 1000);
echo $employee1->initialize();


?>