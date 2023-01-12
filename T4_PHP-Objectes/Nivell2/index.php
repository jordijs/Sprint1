<?php

require 'main.php';
?>

<p>
    Benvingut al joc.
</p>
<form method="post">
    <input type="submit" name="btn-throw" value="Tira el dau 5 cops" />
    </p>
</form>
<p>
    <?php
    if(isset($_POST['btn-throw']))
    {
        $game = new Game;
        $game->throw5dices();
        echo "<p>El dau s'ha llençat " . $game->getTotalThrows() . " vegades</p>";
        $_POST['btn-throw'] = false;
    }
    ?>