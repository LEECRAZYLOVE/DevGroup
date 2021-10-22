<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body>

<?php

$currentuser = $_COOKIE["user"];

//add appropriate fields

    require_once("config.php");
    //$client_id = $_REQUEST['clientId'];
    $email = $_REQUEST['email'];

    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "UPDATE user SET Email = '$email'
                WHERE USER_ID = '$currentuser'";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    echo '<script> 
            alert("Your email was successfully updated!");
            window.location.href="ManageAccount_general.php";
            </script>'; //Alerts the user redirects back to account page   
?>
<!--Just a footer for profesionalism-->
<footer>
    <p>&copy; 2021 Ultimate TCG.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        Notrem, Stuurman & Van der Merwe
    </p>
    <p>
        <small>Last modified:
            <time>14 October 2021</time>
        </small>
    </p>
</footer>
</body> 
</html>