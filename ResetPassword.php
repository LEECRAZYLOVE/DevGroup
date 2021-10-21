<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS\Forms.css">
    <title>Reset Password</title>   
</head>
<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li style="float:center"> <a href="HomeGeneral.php"><img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="text-align:center; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="Landing.php"><img id ="logout" src="images/signout.png" alt="signout" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="cart.php"><img id ="cart" src="images/shopping-cart.png" alt="cart" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="cart.php"><img id ="cart" src="images/history.png" alt="cart" style="width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->
<main>
<?php //Rest password query in the same page
if (isset($_REQUEST['submit'])) {
    
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
}
?>
<h1>Reset Password</h1>

<form action="ResetPasswordQuery.php" method="POST">

<fieldset>
    <legend>Change Password:</legend>

    <label for="password">New Password</label> <br>
    <input type="password" id="pasword" name="password" required> <br>

    <label for="password">Confirm password</label> <br>
    <input type="password" id="pasword" name="rpassword" required> <br>

    <br><input class="button" type="submit" value="Confirm password">

</fieldset>

</form>

</main>

</body>

<footer>
    <p>&copy; 2021 NameOfStore.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        NameOfStore
    </p>
</footer>

</html>