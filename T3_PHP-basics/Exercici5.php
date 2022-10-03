<!DOCTYPE html>
<html>
    <body>
        <?php
            $pricesOld = array(40, 50, 60, 100, 300);
            $pricesNew = array(95, 175, 990);

            echo "<strong>1. </strong><br/>";
            var_dump ($pricesOld);
            echo "<br/>";
            var_dump ($pricesNew);
            echo "<br/>";

            $pricesNew[3] = "discount";

            echo "<strong>2. </strong><br/>";
            var_dump ($pricesOld);
            echo "<br/>";
            var_dump ($pricesNew);
            echo "<br/>";

            $pricesMixed = array_merge($pricesOld, $pricesNew);

            echo "<strong>3. </strong><br/>";
            var_dump ($pricesMixed);
            echo "<br/>
            <br/>
            <br/>
            <strong>La llista completa conté " . count($pricesMixed) . " elements.<br/>
            El contingut de la llista és el següent: <br/>";
            foreach($pricesMixed as $element) {
                echo $element . "<br/>";
            }
            echo "</strong>"
        ?>
    </body>
</html>