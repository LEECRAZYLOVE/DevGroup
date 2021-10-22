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
    <title>Yu-Gi-Oh!</title>    
</head>

<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:center; width:160px; height:100px;"> </li>
      <li style="float:right"> <a href="Landing.php"><img id ="signout" src="images/signout.png" alt="signout" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="OrderHistory.php"><img id ="history" src="images/history.png" alt="history" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="Cart.php"><img id ="cart" src="images/shopping-cart.png" alt="cart" style="width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the HTML filter component -->
?>
<h2>Filter</h2>
<ul class = "filter_labels">
  <li><a href="showall.php"> Show all</a></li>
  <li><a href="magic.php"> Magic</a></li>
  <li><a href="yugioh.php"> Yu-Gi-Oh!</a></li>
  <li><a href="pokemon.php"> Pokemon</a></li>
  <li><a href="cardfight.php"> Cardfight</a></li>
  <li><a href="dragonball.php"> Dragon Ball Super</a></li>
 <li><a href="fleshandblood.php"> Flesh and Blood</a></li>
</ul>
<br>
<div class = "filter_labels">
  <li><a href="yugiohQuery.php?id=SetName">Set Name</a></li>
  <li><a href="yugiohQuery.php?id=RarityName">Rarity Name</a></li>
  <li><a href="yugiohQuery.php?id=CardType">Card Type</a></li>
</div>
<br>

</main>
<section style="color:darkcyan;" class="display">
    <?php //If any of the sub-categories are picked then it will redirect here.
        $cards = array(); //To store the picture file paths for the cards
        $filter = $_REQUEST['id'];
        echo $filter;
        $categories_SetName = array(); //To store all the set names
        $categories_RarityName = array(); //To store all the Rarity names
        $categories_CardType = array(); //To store all the card types

        require_once("config.php");

        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
        or die("ERROR: unable to connect to database!");
        //query instructions
        $query = "SELECT tcg.Picture, tcg.Name, tcg.TCG_ID, tcg.Alternative, yugioh_category.SetName, yugioh_category.Rarity, yugioh_category.CardType
                    FROM tcg
                    LEFT JOIN yugioh_category
                    ON tcg.TCG_ID = yugioh_category.TCG_ID";
                    //WHERE tcg.TCG_ID = yugioh_category.TCG_ID;"
        $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");

        $i = 0; //For cards array
        $j = 0; //For categories array
        while ($row = mysqli_fetch_array($result)) {
            $cards[$i] = $row["Picture"];
            $cards[$i+1] = $row["TCG_ID"];
            $cards[$i+2] = $row["Name"];  
            $cards[$i+3] = $row["Alternative"]; 
            $cards[$i+4] = $row["SetName"];
            $cards[$i+5] = $row["Rarity"];
            $cards[$i+6] = $row["CardType"];
            $categories_SetName[$j] = $row["SetName"];
            $categories_RarityName[$j] = $row["Rarity"];
            $categories_CardType[$j] = $row["CardType"];
            $i+=7; //each set of 7 is a different card
            $j++;
        }
        // close the connection to database
        mysqli_close($conn);
        // Set Name
        if ($filter == "SetName") //Show all the set names essentially, order by set name
        {  
            //Making the array only have unique values without the duplicate sub-category name
            $categories_SetName = array_unique($categories_SetName);

            foreach($categories_SetName as $category) {
            echo "<h2>" . $category. "</h2>"; //Displaying yugioh set names
            echo "<ul class=\"tcgCards_category\">";
            for ($i=0; $i < count($cards); $i+=7) 
            {
                if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T' && $cards[$i+4] == $category) 
                { //Checking to see that it's in the right category
                echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
                }
            }
            echo "</ul><br>";
            }
        }  //Rarity Name
        else if ($filter == "RarityName") //Show all the rarity names essentially, order by rarity name 
        {
            //Making the array only have unique values without the duplicate sub-category name
            $categories_RarityName = array_unique($categories_RarityName);

            foreach($categories_RarityName as $category) {
            echo "<h2>$category</h2>"; //Displaying yugioh rarity names
            echo "<ul class=\"tcgCards_category\">";
            for ($i=0; $i < count($cards); $i+=7) 
            {
              if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T' && $cards[$i+5] == $category) //Checking to see that it's in the right category
              { 
                  echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
              }
            }
            echo "</ul>";
            }
        }     //Card Type
        else if ($filter == "CardType") //Show all the card types essentially, order by rarity name 
        {
            //Making the array only have unique values without the duplicate sub-category name
            $categories_CardType = array_unique($categories_CardType);

            foreach($categories_CardType as $category) {
            echo "<h2>$category</h2>"; //Displaying yugioh set names
            echo "<ul class=\"tcgCards_category\">";
            for ($i=0; $i < count($cards); $i+=7) 
            {
              if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T' && $cards[$i+6] == $category) 
              { //Checking to see that it's in the right category
                  echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
              }
            }
            echo "</ul>";
            }
        }     
            
?>
</section>
</body>
</html>