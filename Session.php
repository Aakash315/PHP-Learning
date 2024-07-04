<?php
session_start();
?>
<html>
    <body>
        <?php
        $_SESSION["favcolor"]="black";
        $_SESSION["favcar"]="scorpio";
        $_SESSION["favanimal"]="dog";
        echo "session variable are set <br>";
        print_r ($_SESSION);
        echo "<br>";
        $_SESSION["favcar"] = "thar";
        print_r($_SESSION);
        ?>
    </body>
</html>
<br>
<html>
    <body>
        <?php
        echo "session is unset...".session_unset(); //true value 1 print (for personal understanding)
        echo "session is destroy ...".session_destroy(); //true value 1 print( for personal understanding)
        
        ?>
    </body>
</html>

