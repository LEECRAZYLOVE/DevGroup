<?php

require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT Name FROM tcg WHERE TCG_ID = '$selectedProduct'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($result)){
                  $picture = $row['Picture'];
                }   

?>