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
    <title>Pokemon</title>   
</head>

<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li style="float:center"> <img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="margin-left: 600px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="images/user-icon.png" alt="User Profile" style="width:50px; height:50px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the filter component -->
<h2>Filter</h2>
<ul class = "filter_labels">
  <li><a href="showall.php"> Show all</a></li>
  <li><a href="magic.php"> Magic</a></li>
  <li><a href="yugioh.php"> Yu-Gi-Oh!</a></li>
  <li><a href="pokemon.php"> Pokemon</a></li>
  <li><a href="cardfight.php"> Cardfight</a></li>
  <li><a href="dragonball.php"> Dragon Ball Super</a></li>
 <li><a href="fleshblood.php"> Flesh and Blood</a></li>
</ul>
<br>
<div class = "filter_labels">
  <li><a href="pokemonQuery.php?id=SetName">Set Name</a></li>
  <li><a href="pokemonQuery.php?id=RarityName">Rarity Name</a></li>
  <li><a href="pokemonQuery.php?id=CardType">Card Type</a></li>
</div>
<br>
<?php //Retrieving all the products
    $cards = array(); //To store the picture file paths or the cards
    
    require_once("config.php");
    
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

    mysqli_close($conn);
    
    echo "<ul class=\"tcgCards_category\"> <!-- Showing all the cards -->";
     for ($i=0; $i < count($cards); $i+=4) {
       if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category .
         echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
       }
     } 
    echo "</ul>";
?>
</main>

</body>
</html>