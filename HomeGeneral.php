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
    <title>Home</title>   
  </head>

<!-- Start of Style for filter -->
<style>
.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 150px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<!-- Start of Style for filter -->

<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li style="float:center"> <a href="HomeGeneral.php"><img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="margin-left: 600px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="images/user-icon.png" alt="User Profile" style="width:50px; height:50px;"></a> </li>
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
<div id="myBtnContainer">
  <button class="btn active all" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('magic')"> Magic</button>
  <button class="btn" onclick="filterSelection('yu-Gi-Oh!')"> Yu-Gi-Oh!</button>
  <button class="btn" onclick="filterSelection('pokemon')"> Pokemon</button>
  <button class="btn" onclick="filterSelection('cardfight')"> Cardfight</button>
  <button class="btn" onclick="filterSelection('dragon Ball Super')"> Dragon Ball Super</button>
  <button class="btn" onclick="filterSelection('flesh and blood')"> Flesh and Blood</button>
</div>

<div class="container">
  <div class="filterDiv magic pokemon yu-Gi-Oh! cardfight dragon Ball Super flesh and blood">Set name</div>
  <div class="filterDiv magic pokemon yu-Gi-Oh! cardfight dragon Ball Super flesh and blood">Rarity name</div>
  <div class="filterDiv pokemon magic yu-Gi-Oh! flesh and blood dragon Ball Super">Card type</div>
  <div class="filterDiv magic dragon Ball Super">Colour</div>
  <div class="filterDiv cardfight">Nation</div>
  <div class="filterDiv cardfight">Grade</div>
  <div class="filterDiv cardfight">Skill icon</div>
  <div class="filterDiv flesh and blood">Sub-type</div>
  <div class="filterDiv flesh and blood">Class</div>
  <div class="filterDiv dragon Ball Super">Character</div>
  <div class="filterDiv dragon Ball Super">Era</div>
</div>

<section class="allCategories"><!--canvas for all the filtering-->
  <section id="all">
  <?php
      if (isset($_REQUEST["id"]))
      {
        $filter = $_REQUEST['id'];
        if ($filter == "all")
        {
          echo "<h2>Magic</h2>"; //Displaying Magic
          echo "<ul class=\"tcgCards_category\"> <!-- Magic -->";
          for ($i=0; $i < count($cards); $i+=4) 
          {
            if (substr($cards[$i],0,1) == 'm' && $cards[$i+3] != 'T') 
            { //Checking to see that it's in the right category
              echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
            }
          }
          echo "</ul>";

          echo "<h2>Yu-Gi-Oh!</h2>"; //Displaying Yu-Gi-Oh!
          for ($i=0; $i < count($cards); $i+=4) 
          {
            if (substr($cards[$i],0,1) == 'y' && $cards[$i+3] != 'T') 
            { //Checking to see that it's in the right category
              echo "<li><a style=\"text-decoration:none;\" href=\"display_tcg.php?id=" . $cards[$i+1] . "\"><p style =\"text-align:center;\">" . $cards[$i+2] . "</p><img class=\"tcgCards\" src=\"images/cards/" . $cards[$i] ." \" style=\"width:200px; height:250px;\"></li>";
            }
          }
        }        
      }      
    ?>
  </section>   
</section> <

<script>
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }  
  document.getElementById(c).style.display = "none";
}

function filter(c) {
  
} 

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<!--End of the HTML/CSS filter section-->
</main>

</body>
</html>