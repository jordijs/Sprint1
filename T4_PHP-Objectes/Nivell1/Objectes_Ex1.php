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

    public function print(){
        echo $this->name . "<br/>";
        if (($this->income) > 6000) {
            echo "Paga impostos";
        } else {
            echo "No paga impostos.";
        }
        echo "<br/><br/>";
    }

}


$employee1 = new Employee();
$employee1->initialize("Joan", 4000);
$employee1->print();

$employee2 = new Employee();
$employee2->initialize("Maria", 6000);
$employee2->print();

$employee3 = new Employee();
$employee3->initialize("Carles", 6001);
$employee3->print();

$employee4 = new Employee();
$employee4->initialize("Lídia", 10000);
$employee4->print();



?>