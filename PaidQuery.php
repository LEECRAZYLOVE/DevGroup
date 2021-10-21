<?php

$tcgid = $_REQUEST['id'];

require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "UPDATE tcg
        SET Status = 'P'
        WHERE TCG_ID = '$tcgid'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");


?>