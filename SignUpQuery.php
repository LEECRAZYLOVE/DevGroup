<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

  <?php
    $currentuser = $_REQUEST['id'];

    setcookie("user", $currentuser, time() + (86400), "/");
    
    //this page will be used to add client information when they sign up to the dabatase
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $password = $_REQUEST['password'];
    $rpassword = $_REQUEST['repeat_password'];
    $username = $_REQUEST['username'];
    $UserId = substr($username,0,4) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);

    if ($password == $rpassword) { //Checks if the passwords match
      require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "INSERT INTO user(User_ID, FirstName, LastName, Email, Password, ContactDetails, Username) 
              VALUES ('$UserId', '$firstname', '$lastname', '$email', '$password', '$contact', '$username')";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    
    //redirecting to the home page once successful
    header("Location:HomeGeneral.php");
    } 
    else {
    //redirecting to the sign up page once unsuccessful
    header("Location:SignUp.php"); //Takes the user back to sign up page
    echo "<strong style = \"color : red; \"> Passwords do not match. </strong>"; //Lets the user know why sign up failed
  }  
  ?> 

</body> 
</html>