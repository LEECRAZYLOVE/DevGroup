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
    <title>Show All</title>    
</head>

<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:center; width:140px; height:80px;"> </li>
      <li> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the HTML filter component -->
<?php //Retrieving all the products
    $cards = array(); //To store the picture file paths or the cards
    
    require_once("config.php");
    // make connection to database
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
        or die("ERROR: unable to connect to database!");
    // issue query instructions
    $query = "SELECT Picture, Name, TCG_ID, Alternative FROM tcg";
    $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");

    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
      $cards[$i] = $row["Picture"];
      $cards[$i+1] = $row["TCG_ID"];
      $cards[$i+2] = $row["Name"];  
      $cards[$i+3] = $row["Alternative"]; 
      $i+=4; 
    }

    // close the connection to database
    mysqli_close($conn);
?>

<h2>Filter</h2>
<ul class = "filter_labels">
  <li><a href="showall.php?id=showall"> Show all</a></li>
  <li><a href="magic.php?id=magic"> Magic</a></li>
  <li><a href="yugioh.php?id=yugioh"> Yu-Gi-Oh!</a></li>
  <li><a href="pokemon.php?id=pokemon"> Pokemon</a></li>
  <li><a href="cardfight.php?id=cardfight"> Cardfight</a></li>
  <li><a href="dragonball.php?id=dragonball"> Dragon Ball Super</a></li>
 <li><a href="fleshblood.php?id=fleshblood"> Flesh and Blood</a></li>
</ul>
<!--Displaying all the cards in all categories-->
<h2>Magic</h2>
<ul class="tcgCards_category"> <!-- Magic -->
    <?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'm' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      } 
    ?>
</ul>

<h2>Yu-Gi-Oh!</h2>
<ul class="tcgCards_category"> <!-- Yu-Gi-Oh! -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'y'&& $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Pokeman</h2>
<ul class="tcgCards_category"> <!-- Pokeman -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Cardfight</h2>
<ul class="tcgCards_category"> <!-- Cardfight -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'c' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Dragon Ball Super</h2>
<ul class="tcgCards_category"> <!-- Dragon Ball Super -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'd' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Fresh and Blood</h2>
<ul class="tcgCards_category"> <!-- Fresh and Blood -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'f' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>
</section>
</main>
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