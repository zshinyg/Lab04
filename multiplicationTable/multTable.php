<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    echo "<table>";
    echo "<tr>";
    echo "<th></th>";

    for ($x=1; $x <= 100; $x++) { 
        echo "<th>";
        echo $x;
        echo "</th>";
    }
    
    echo "</tr>";


    for($i = 1; $i <= 100; $i++){

        echo "<tr>";
        echo "<th>". $i. "</th>";
        for ($j=1; $j <= 100 ; $j++) { 
            echo "<td align='center'>". $i*$j. "</td>";

        }
        echo "</tr>";
    }

    echo "</table>";

?>