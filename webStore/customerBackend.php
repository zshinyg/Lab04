<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    echo " <link rel='stylesheet' href='style.css' type='text/css'> ";
    
    
    $password = $_POST['password'];
    $mooseQuant =$_POST['mooseBowls'];
    $blackQuant =$_POST['blackout'];
    $jayQuant = $_POST['jayShot'];
    $shipping = $_POST['shipOption'];
    $shippingPrice = 0;
    $totalCost = 0;




    if ($shipping == "Free 7 Day") {
        $shippingPrice = 0;
    }
    elseif ($shipping == "Over Night") {
        $shippingPrice = 50;
    }
    else {
        $shippingPrice = 5;
    }



    echo "Thank you for your purchase!<br><br>";
    echo "Password: " . $password;
    echo "<br><br><br>";
    echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Quantity</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Sub Total</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Moose Bowl</th>";
        echo "<td align='center'>" . $mooseQuant . "</td>";
        echo "<td align='center'>" . "$8.00" . "</td>";
        echo "<td align='center'>" . "$" . $mooseQuant*8.00 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Blackout Bucket</th>";
        echo "<td align='center'>" . $blackQuant . "</td>";
        echo "<td align='center'>" . "$5.00" . "</td>";
        echo "<td align='center'>" . "$" . $blackQuant*5.00 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Jayhawk Shot</th>";
        echo "<td align='center'>" . $jayQuant . "</td>";
        echo "<td align='center'>" . "$1.00" . "</td>";
        echo "<td align='center'>" . "$" . $jayQuant*1.00 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Shipping</th>";
        echo "<td align='center' colspan='2'>" . $shipping . "</td>";
        echo "<td align='center'>" . "$" . $shippingPrice . "</td>";        
        echo "</tr>";

        $totalCost = $mooseQuant*8.00 + $blackQuant*5.00 + $jayQuant*1.00 + $shippingPrice;

        echo "<tr>";
        echo "<th colspan='3'>Total Cost</th>";
        echo "<td align='center'>" . "$" . $totalCost . "</td>";        
        echo "</tr>";

    echo "</table>";

?>