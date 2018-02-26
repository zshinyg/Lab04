<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    
    $password = $_POST['password'];
    $mooseQuant =$_POST['mooseBowls'];
    $blackQuant =$_POST['blackOutBucket'];
    $jayQuant = $_POST['jayShot'];



    echo "Thank you for your purchase!<br><br>";
    echo "Password: " . $password;
    echo "<br>";
    echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Quantity<th>";
        echo "<th>Cost Per Item<th>";
        echo "<th>Sub Total<th>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Moose Bowl</th>";
        echo "<td align='center'>" . $mooseQuant . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Blackout Bucket</th>";
        echo "<td align='center'>" . $blackQuant . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Jayhawk Shot</th>";
        echo "<td align='center'>" . $jayQuant . "</td>";
        echo "</tr>";


    echo "</table>";

?>