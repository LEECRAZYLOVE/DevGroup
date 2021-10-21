<!DOCTYPE html>
<?php
setcookie('user', $currentuser, time()+86400, "/");
setcookie('cart', $currentcart, time() + (86400), "/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS\Landing.css">   
    <title>Home</title>   
  </head>

<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li > <a href="HomeGeneral.php"><img  src="images/logo.png" alt="Store logo" style="text-align:center; width:140px; height:40px;"> </li>
      <li > <a href="ManageAccount_general.php"><img src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
      <li > <a href="Landing.php"><img  src="images/signout.png" alt="signout" style="width:50px; height:50px;"> </li>
      <li > <a href="cart.php"><img  src="images/shopping-cart.png" alt="cart" style="width:50px; height:50px;"> </li>
      <li> <a href="cart.php"><img src="images/history.png" alt="cart" style="width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->
<?php
require_once('config.php');

  $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
  or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT Cart_ID FROM cart
          ORDER BY Cart_ID DESC
          LIMIT 1;";

$result = mysqli_query($connect, $query)
  or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

  while($row = mysqli_fetch_array($result)){
    $previousCart_ID = $row['Cart_ID'];
  }   
//close connection to the database
mysqli_close($connect);

$currentuser = $_REQUEST['id'];
$currentcart = $previousCart_ID + 1;
?>

<main>
<!--Start of the HTML filter component -->
<h2>Filter</h2>
<ul class = "filter_labels">
  <li><a href="showall.php?id=showall"> Show all</a></li>
  <li><a href="magic.php?id=magic"> Magic</a></li>
  <li><a href="yugioh.php?id=yugioh"> Yu-Gi-Oh!</a></li>
  <li><a href="pokemon.php?id=pokemon"> Pokemon</a></li>
  <li><a href="cardfight.php?id=cardfight"> Cardfight</a></li>
  <li><a href="dragonball.php?id=dragonball"> Dragon Ball Super</a></li>
 <li><a href="fleshandblood.php?id=fleshblood"> Flesh and Blood</a></li>
</ul>
<br>
</main>

</body>
</html>