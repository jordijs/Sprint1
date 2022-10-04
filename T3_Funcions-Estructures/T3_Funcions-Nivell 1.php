<!DOCTYPE html>
<html>
    <body>
        <?php

            /*Exercici 1
            Programa una funció que, donat un número qualsevol (per exemple, la teva edat) ens digui si és parell o imparell 
            mitjançant un missatge per pantalla.*/

            echo "<h1>Ex.1: Edat</h1>";

            function even($age)
            {
                if (($age % 2) == 0) {
                    return "L'edat $age és parell";
                } else {
                    return "L'edat $age és senar";
                }
            }
            echo even (28);
            

            /*Exercici 2
            Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa
            i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.*/

            function amagatall() {
                for ($i=0; $i <= 10 ; $i = $i+2) { 
                    echo "<br/>
                    $i";
                }
            }
            
            echo "<br/><br/><h1>Ex.2: Amagatall</h1>";
            amagatall();

            /*Exercici 3
            Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.*/

            function amagatallParam($num) {
                for ($i=0; $i <= $num ; $i = $i+2) { 
                    echo "<br/>
                    $i";
                }
            }

            echo "<br/><br/><h1>Ex.3: Amagatall parametritzat</h1>";
            amagatallParam($num = 16);

            /*Exercici 4
            Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.*/

            function amagatallParamDefault($num = 10) {
                for ($i=0; $i <= $num ; $i = $i+2) { 
                    echo "<br/>
                    $i";
                }
            }

            echo "<br/><br/><h1>Ex.4: Amagatall parametritzat per defecte</h1>";
            amagatallParamDefault();
            
            /*Exercici 5
            Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
            Condicions: 
            Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
            Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
            Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
            Si la nota és menor a 33%, l'estudiant reprovarà*/

            function degree($mark) {

                if ($mark >= 60) {
                    return "Primera Divisió";
                } elseif (($mark >= 45) && ($mark <= 59)) {
                    return "Segona Divisió";
                } elseif (($mark >= 33) && ($mark <= 44)) {
                    return "Tercera Divisió";
                } else {
                    return "Suspès";
                }
            }

            $mark = 35;
            echo "<br/><br/><h1>Ex.5: Grau</h1>
            La nota és d'un $mark%. El grau de l'alumne és: ";
            echo degree($mark);
            

            /* - Exercici 6
            Charlie em va mossegar el dit!
            Charlie et mossegarà el dit exactament el 50% del temps.
            Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
            Consell: pot ser que la funció rand () et resulti útil.*/

            function isBitten(){
                $numRand = rand(0, 100);
                if ($numRand >=50) {
                    return true;
                } else {
                    return false;
                }
            }

            echo "<br/><br/><h1>Ex.6: Charlie</h1>";
           
            echo "Charlie t'ha mossegat el dit?<br/>";
            if (isBitten()){
                echo "Sí! T'ha mossegat!";
            } else {
                echo "No t'ha mossegat.";
            }
            ;
            
        ?>
    </body>
</html>