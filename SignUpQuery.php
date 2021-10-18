<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

  <?php

    //this page will be used to add client information when they sign up to the dabatase
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['surname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['contact'];
    $password = $_REQUEST['password'];
    $username = $_REQUEST['username'];
    $UserId = substr($username,0,4) . "5471";

    require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "INSERT INTO user (User_ID, FirstName, LastName, Email, Password, ContactDetails, Username) VALUES ('$UserId', '$firstname', '$lastname', '$email', '$password', '$phone', $username)";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    
    //redirecting to the home page once successful
    header("Location:HomeGeneral.php")
    ?>

</body> 
</html>