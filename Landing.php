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
    <title>Welcome</title>   
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
  <?php //Displaying all the products
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



<h1 style="color:black; margin-top: 20px; text-align: center; margin-right: 500px; margin-left: 500px; background-color: darkcyan"><b>Featured</b></h1>

<!--Start of Categories section to showcase what cards are featured in the store-->
<section class="allCategories">

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

<!-- js to make the horizontal scrolling feature-->
<script>
var myIndex = 0;
slideshow();

function slideshow() {
  var i;
  var v = document.getElementsByClassName("tcgCards_image1");
  var w = document.getElementsByClassName("tcgCards_image2");
  var x = document.getElementsByClassName("tcgCards_image3");
  var y = document.getElementsByClassName("tcgCards_image4");
  var z = document.getElementsByClassName("tcgCards_image5");
  var a = document.getElementsByClassName("tcgCards_image6");
  var b = document.getElementsByClassName("tcgCards_image7");
  var c = document.getElementsByClassName("tcgCards_image8");
  var d = document.getElementsByClassName("tcgCards_image9");
  var e = document.getElementsByClassName("tcgCards_image10");
  
  for (i = 0; i < 5; i++) {
    a[i].style.display = "none"; 
    b[i].style.display = "none"; 
    c[i].style.display = "none";  
    d[i].style.display = "none";
    e[i].style.display = "none";
    v[i].style.display = "none"; 
    w[i].style.display = "none"; 
    x[i].style.display = "none"; 
    y[i].style.display = "none"; 
    z[i].style.display = "none"; 
  }
  myIndex++;
  if (myIndex > 10) {myIndex = 1}  
  v[myIndex-1].style.display = "block"; 
  w[myIndex-1].style.display = "block";   
  x[myIndex-1].style.display = "block";
  y[myIndex-1].style.display = "block";  
  z[myIndex-1].style.display = "block";
  a[myIndex-1].style.display = "block";
  b[myIndex-1].style.display = "block"; 
  c[myIndex-1].style.display = "block"; 
  d[myIndex-1].style.display = "block"; 
  e[myIndex-1].style.display = "block"; 
  setTimeout(slideshow, 4000); // Change image every 2 seconds
}


</script>
</section>
<!--End of categories Slideshow section-->

<!--Start of lowersection-->
<aside>
    <ul class="lowersection">
        <li> 
          <div class="form">             
                <h3>Contact Us</h3>
                <form action="ContactUsQuery.php"> <!--Should store information into the database-->
                    <label for="firstname">First Name:</label><br>
                    <input class="textbox" type="text" id="firstname" name="fname" placeholder="Jane"><br>

                    <label for="surname">Surname:</label><br>
                    <input class="textbox" id="surname" type="text" name="surname" placeholder="Doe"><br>

                    <label for="email">Email:</label><br>
                    <input class="textbox" type="email" id="email" name="email" placeholder="janedoe488@gmail.com"></br>
     
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" placeholder="Type your message here..." rows="10" cols="40"></textarea><br><br>

                    <input class="button" type="submit" id="submit" value="Send">
                </form>  
            </div>
        </li>
        <li>
          <div class="questions">
              <h3>Frequently asked questions</h3>
                <ul class = fqas>
                    <li>    
                        <select id="fqa1">
                            <option>How can I make a booking</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </li><br>
                    <li>
                        <select id="fqa2">
                            <option>Is it possible to pay using a debit/credit card?</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select> 
                    </li><br>
                    <li>
                        <select id="fqa3">
                            <option>How do I customize my booking</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </li>
                </ul>
          </div>
    </ul>
</aside>
<!--End of lowersection-->
</main>
<!--Just a footer for profesionalism-->
<footer>
    <p>&copy; 2021 NameOfStore.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        NameOfStore
    </p>
    <p>
        <small>Last modified:
            <time>14 October 2021</time>
        </small>
    </p>
</footer>
</html>