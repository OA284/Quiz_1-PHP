<?php
    echo "Figure 1:<br>";
    $height = 5;
    for ($row = 1; $row <= $height; $row++) {
        for ($i = 1; $i <= $height - $row; $i++) {
            echo "&nbsp;";
        }
        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($row = $height - 1; $row >= 1; $row--) {
        for ($i = 1; $i <= $height - $row; $i++) {
            echo "&nbsp;";
        }
        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>Figure 2:<br>";
    for ($i=0; $i < $height+1; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    for ($i=$height-1; $i >= 0; $i--) { 
        for ($j=$i; $j >= 0; $j--) { 
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>Figure 3:<br>";
    for ($i=1; $i < $height+1; $i += 2) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    for ($i=$height-3; $i >= 0; $i -= 2) { 
        for ($j=$i; $j >= 0; $j--) { 
            echo "*";
        }
        echo "<br>";
    }
?>