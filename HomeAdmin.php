<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS\Landing.css">   
</head>
<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:left; width:160px; height:100px;"> </li>
      <li> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="text-align:right; width:50px; height:50px;"> </li>
      <li> <a href="AdminRequests.php"><img id ="history" src="images/history.png" alt="history" style="text-align:right; width:50px; height:50px;"> </li>
      <li> <a href="Landing.php"><img id ="signout" src="images/signout.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
      <li> <a href="AdminPayments.php"><img id ="payments" src="images/wallet.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the HTML filter component -->
<h2>Business Intelligence Dashboard</h2>
<ul class = "filter_labels">
  <li><a href="homeadmin.php?id=users"> Total Number of Users</a></li><br>
  <li><a href="homeadmin.php?id=products"> Total Number of Products</a></li><br>
  <li><a href="homeadmin.php?id=magicnumbers"> Total Number of Magic Products</a></li><br>
  <li><a href="homeadmin.php?id=dragonnumbers"> Total Number of Dragon Ball Super Products</a></li><br>
  <li><a href="homeadmin.php?id=pokemonnumbers"> Total Number of Pokemon Products</a></li><br>
  <li><a href="homeadmin.php?id=cardfightnumbers"> Total Number of Cardfight Vangaurd Products</a></li><br>
 <li><a href="homeadmin.php?id=fleshbloodnumbers"> Total Number of Flesh and Blood Products</a></li><br>
 <li><a href="homeadmin.php?id=yugiohnumbers"> Total Number of Yu-Gi-Oh! Products</a></li><br>
 <li><a href="homeadmin.php?id=magiccommission"> Total Commission Earned for Magic Products</a></li><br>
 <li><a href="homeadmin.php?id=dragoncommission"> Total Commission Earned for Dragon Ball Super Products</a></li><br>
 <li><a href="homeadmin.php?id=pokemoncommission"> Total Commission Earned for Pokemon Products</a></li><br>
 <li><a href="homeadmin.php?id=cardfightcommission"> Total Commission Earned for Cardfight Vangaurd Products</a></li><br>
 <li><a href="homeadmin.php?id=fleshbloodcommission"> Total Commission Earned for Flesh and Blood Products</a></li><br>
 <li><a href="homeadmin.php?id=yugiohcommission"> Total Commission Earned for Yu-Gi-Oh! Products</a></li><br>
</ul>
<br>
<br><br>

</main>
<!-- Filtering for all the BI Intelligence Queries -->
<?php 
    //$cards = array(); //To store the picture file paths or the cards
    require_once("config.php");
    //if (isset($_REQUEST['submit'])) {
    $filter = $_REQUEST['id'];
    $answer = 0;
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
    or die("ERROR: unable to connect to database!");

    if ($filter == "users"){
      $query = "SELECT COUNT(User_ID) as Answer FROM user";
    } else if ($filter == "products") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM tcg";
    }
    
    
    $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");

    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
      $answer = $row['Answer'];
    }
    mysqli_close($conn);
    
    //Display for every filter
    echo 
    "<ul class = filter_labels>
    <h3>Total is</h3>
    <li><input type='text' value=\"$answer\"></li>
    </ul>";
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