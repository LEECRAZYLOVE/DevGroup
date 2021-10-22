<?php

$currentuser = $_COOKIE['user'];

$tcgid = $_REQUEST['id'];

require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "UPDATE tcg
        SET OrderStatus = 'Sold'
        WHERE TCG_ID = '$tcgid'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

header("refresh:0; homegeneral.php?id=$currentuser");
echo '<script> 
    alert("Payment Confirmed!");
    </script>'; //Alerts the user redirects back to account page


?>