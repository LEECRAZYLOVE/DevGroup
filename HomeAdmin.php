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
      <li> <a href="HomeAdmin.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:left; width:160px; height:100px;"> </li>
      <li style="float:right"> <a href="resetpassword.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="AdminRequests.php"><img id ="history" src="images/history.png" alt="history" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="AdminPayments.php"><img id ="payments" src="images/wallet.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="Landing.php"><img id ="signout" src="images/signout.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<br>
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
    $filter = $_REQUEST['id'];
    $answer = 0;
    $answerc = 0;
    $query = "";
    $queryc= "";
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
    or die("ERROR: unable to connect to database!");

    if ($filter == "users"){
      $query = "SELECT COUNT(User_ID) as Answer FROM user";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
    while ($row = mysqli_fetch_array($result)) 
    {
      $answer = $row['Answer'];
    }

    } else if ($filter == "products") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM tcg";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "magicnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM magic_category";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "dragonnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM dragonball_category";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "pokemonnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM pokemon_category";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "fleshbloodnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM fleshblood_category";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "cardfightnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM cardfight_category";
      $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($result)) 
      {
        $answer = $row['Answer'];
      }
    } else if ($filter == "yugiohnumbers") {
      $query = "SELECT COUNT(TCG_ID) as Answer FROM yugioh_category";
          $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
    while ($row = mysqli_fetch_array($result)) 
    {
      $answer = $row['Answer'];
    }
    } 
      else if ($filter == "magiccommission") {
      $queryc = "SELECT SUM(Commission) as Answer FROM tcg WHERE TCG_ID LIKE'magi%' ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } else if ($filter == "dragoncommission") {
      $queryc = "SELECT SUM(Commission) as Answer FROM tcg LEFT JOIN dragonball_category ON dragonball_category.TCG_ID = tcg.TCG_ID ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } else if ($filter == "pokemoncommission") {
      $queryc = "SELECT COUNT(Commission) as Answer FROM tcg LEFT JOIN pokemon_category ON pokemon_category.TCG_ID = tcg.TCG_ID ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } else if ($filter == "fleshbloodcommission") {
      $queryc = "SELECT COUNT(Commission) as Answer FROM tcg LEFT JOIN fleshblood_category ON fleshblood_category.TCG_ID = tcg.TCG_ID ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } else if ($filter == "cardfightcommission") {
      $queryc = "SELECT COUNT(Commission) as Answer FROM tcg LEFT JOIN cardfight_category ON cardfight_category.TCG_ID = tcg.TCG_ID ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } else if ($filter == "yugiohcommission") {
      $queryc = "SELECT COUNT(Commission) as Answer FROM tcg LEFT JOIN yugioh_category ON yugioh_category.TCG_ID = tcg.TCG_ID ";
      $resultc = mysqli_query($conn, $queryc) or die("ERROR: unable to execute query!");
      while ($row = mysqli_fetch_array($resultc)) {
        $answerc = $row['Answer'];
        $answerc = "R$answer";
      }
    } 
    
    
    


    mysqli_close($conn);
    
    //Display for every filter
    if ($filter == "products" || $filter == "users" || $filter == "magicnumbers" || $filter == "dragonnumbers" || $filter == "yugiohnumbers" || $filter == "fleshbloodnumbers" || $filter == "cardfightnumbers" || $filter == "pokemonnumbers")
     {
      echo 
      "<ul class = filter_labels>
      <h3>Total is</h3>
      <li><input type='text' value=\"$answer\"></li>
      </ul>";
     } 
     else if ($filter == "magiccommission" || $filter == "dragoncommission" || $filter == "yugiohcommission" || $filter == "fleshbloodcommission" || $filter == "cardfightcommission" || $filter == "pokemoncommission")
     {
      echo 
      "<ul class = filter_labels>
      <h3>Total is</h3>
      <li><input type='text' value=\"$answerc\"></li>
      </ul>";
     }

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