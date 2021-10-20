<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <title>Reset Password</title>   
</head>
<body>
<?php 
    //$client_id = $_REQUEST['clientId'];
    $password = $_REQUEST['password'];
    $rpassword = $_REQUEST['rpassword'];

    if ($password != $rpassword) {
      echo '<script> 
            alert("Unsuccessful: Your passwords do not match.");
            </script>'; //Alerts the user that the passwords do not match   
    } else {

    require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "UPDATE user SET Password = '$password'
                WHERE USER_ID = \"Will5471\"";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    echo '<script> 
            alert("Your password was successfully updated!");
            window.location.href="HomeGeneral.php";
            </script>'; //Alerts the user redirects back to account page   
    }
?>
</html>