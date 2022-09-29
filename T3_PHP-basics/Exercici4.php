<html>
    <head>
        <title>Exercici 4</title>
    </head>
    <body>
        <?php
        $x = 8;
        $y = 9;
        $n = 1.234;
        $m = 5.678;

        echo "X té el valor " . $x . ".<br/>
        Y té el valor " . $y . ". <br/>
        La suma de X més Y és " . ($x + $y) . ".<br/> 
        La resta de X menys Y és " . ($x - $y) . ".<br/>
        El producte de X per Y és " . ($x * $y) . ".<br/>
        El mòdul de X entre Y és " . ($x % $y) . ".<br/>
        <br/>
        N té el valor " . $n . ".<br/>
        M té el valor " . $m . ". <br/>
        La suma de N més M és " . ($n + $m) . ".<br/> 
        La resta de N menys M és " . ($n - $m) . ".<br/>
        El producte de N per M és " . ($n * $m) . ".<br/>
        El mòdul de N entre M és " . ($n % $m) . ".<br/>
        <br/>
        Els dobles de cada variable són: " . ($x * 2) . ", " . ($y * 2) . ", " . ($n * 2) . " i " . ($m * 2) . ".<br/>
        La suma de totes les variables és: " . ($x + $y + $n + $m) . ".<br/>
        El producte de totes les variables és: " . ($x * $y * $n * $m) . ".";
        ?>
    </body>
</html>