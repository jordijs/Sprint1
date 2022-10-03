<!DOCTYPE html>
<html>
    <body>
        <?php
            function even($age)
            {
                if (($age % 2) == 0) {
                    return "L'edat $age és parell";
                } else {
                    return "L'edat $age és senar";
                }
            }

            echo even (28);
        
        ?>
    </body>
</html>