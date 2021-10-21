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
    <title>Manage Account</title>   
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
<?php //Viewing Profile Details

    $currentuser = $_COOKIE["user"];
    require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "SELECT  FirstName, LastName, Username FROM user WHERE USER_ID = '$currentuser'";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    while($row = mysqli_fetch_array($result)){
      $firstname = $row['FirstName'];
      $lastname =  $row['LastName'];
      $username = $row['Username'];   
      //echo "<h3>" ."Welcome ". $row['firstName'] . " " . $row['lastName'] ."!". "</h3>". "<br>";
    }   
    //close connection to the database
    mysqli_close($connect);
  ?>

<!--Update Account Details Forms -->
<h1>Account Details:</h1>

<form action="UpdateEmailQuery.php" method="POST">
<fieldset>

        Username: <?php echo $username ?> <br>
        <br>

        Name: <?php echo $firstname . " " . $lastname ; ?> <br>
        
        <br>
        <label for="email">New Email:</label><br>
        <input class="textbox" type="email" id="email" name="email" placeholder="Leave blank if there are no changes"><br>


    <br><input class="button" type="submit" value="Update Email">
    <br><br><a style="color:white; text-align:center;" href="ResetPassword.php">Reset Password</a>
</fieldset>

</form>


<form class="bankdetails" action="UpdateBankQuery.php" method="POST">

<h2>Banking Details:</h2>

<fieldset>
<legend>Only applicable when selling in the store</legend>
    <label for="bank">Bank:</label>
    <br><select name="bank" id="bank">
        <option disabled selected value> -- select an option -- </option>
        <option value="Absa" name="bank">Absa</option>
        <option name="Capitec" value="bank">Capitec</option>
        <option name="Discovery" value="bank">Discovery</option>
        <option name="FNB" value="bank">FNB</option>
        <option name="Nedbank" value="bank">Nedbank</option>
        <option name="Standard Bank" value="bank">Standardbank</option>
    </select><br>

Branch: <br>
<input class="textbox" type="number" name="branch"><br>

Account No.: <br>
<input class="textbox" type="number" name="account"><br>

<br><input class="button" type="submit" value="Submit">

</fieldset>

</form>

<form action="UpdateAddressQuery.php" method="POST">

<h2>Delivery Address:</h2>

<fieldset>
Street Adress: <br>
<input class="textbox" type="text" name="street"><br>

City: <br>
<input class="textbox" type="text" name="city" required><br>

Zip/Postal Code: <br>
<input class="textbox" type="number" name="postcode" required><br>

    <label for="province">Province</label>
    <br><select name="province" id="province">

        <option disabled selected value> -- select an option -- </option>
        <option name="province" value="Gauteng">Gauteng</option>
        <option name="province" value="NC">Northern Cape</option>
        <option name="province" value="EC">Eastern Cape</option>
        <option name="province" value="NW">North West</option>
        <option name="province" value="Limpopo">Limpopo</option>
        <option name="province" value="KZN">Kwazulu-Natal</option>
        <option name="province" value="FS">Free State</option>
        <option name="province" value="MP">Mpumalanga</option>
        <option name="province" value="WC">Western Cape</option>

    </select><br>

<br><input class="button" type="submit" value="Submit">

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