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
    <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:left; width:160px; height:100px;"> </li>
      <li style="float:right"> <a href="SignIn.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
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
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      } 
    ?>
</ul>

<h2>Yu-Gi-Oh!</h2>
<ul class="tcgCards_category"> <!-- Yu-Gi-Oh! -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'y'&& $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Pokeman</h2>
<ul class="tcgCards_category"> <!-- Pokeman -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'p' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Cardfight</h2>
<ul class="tcgCards_category"> <!-- Cardfight -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'c' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Dragon Ball Super</h2>
<ul class="tcgCards_category"> <!-- Dragon Ball Super -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'd' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>

<h2>Fresh and Blood</h2>
<ul class="tcgCards_category"> <!-- Fresh and Blood -->
<?php
      for ($i=0; $i < count($cards); $i+=4) {
        if (substr($cards[$i],0,1) == 'f' && $cards[$i+3] != 'T') { //Checking to see that it's in the right category
          echo "<li><a style=\"text-decoration:none;\" href=signin.php><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
        }
      }
    ?>
</ul>
</section>



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
    <p>&copy; 2021 Ultimate TCG.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        Notrem, Stuurman & Van der Merwe
    </p>
    <p>
        <small>Last modified:
            <time>21 October 2021</time>
        </small>
    </p>
</footer>
</html>