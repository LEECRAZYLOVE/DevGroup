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
<h2>Filter</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
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

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
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
<h1 style="color:lightcyan; margin-left: 10px"><b>Featured</b></h1>

<!--Start of Categories section to showcase all the cards in the store-->
<section class="filterDiv magic pokemon yu-Gi-Oh! cardfight dragon Ball Super flesh and blood"">

</section>
<h2>Magic</h2>
<ul class="tcgCards_category"> <!-- Magic -->
    <li><img class="tcgCards_image" src="images\categories\magic\card1.jpg" style="width:200px; height:250px;"></li>
    <li><img class="tcgCards_image" src="images\categories\magic\card2.jpg" style="width:200px; height:250px;"></li>  
    <li><img class="tcgCards_image" src="images\categories\magic\card3.jpg" style="width:200px; height:250px;"></li>  
    <li><img class="tcgCards_image" src="images\categories\magic\card4.jpg" style="width:200px; height:250px;"></li>  
    <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card5.jpg" style="width:200px; height:250px;"></li>
</ul>

<h2>Yu-Gi-Oh!</h2>
<ul class="tcgCards_category"> <!-- Yu-Gi-Oh! -->
  <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card1.jpg" style="width:200px; height:250px;"></li>
  <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card2.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card3.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card4.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\yu-gi-oh!\card5.jpg" style="width:200px; height:250px;"></li>
</ul>

<h2>Pokeman</h2>
<ul class="tcgCards_category"> <!-- Pokeman -->
  <li><img class="tcgCards_image" src="images\categories\pokeman\card1.jpg" style="width:200px; height:250px;"></li>
  <li><img class="tcgCards_image" src="images\categories\pokeman\card2.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\pokeman\card3.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\pokeman\card4.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\pokeman\card5.jpg" style="width:200px; height:250px;"></li>
</ul>

<h2>Cardfight</h2>
<ul class="tcgCards_category"> <!-- Cardfight -->
  <li><img class="tcgCards_image" src="images\categories\cardfight\card1.jpg" style="width:200px; height:250px;"></li>
  <li><img class="tcgCards_image" src="images\categories\cardfight\card2.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\cardfight\card3.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\cardfight\card4.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\cardfight\card5.jpg" style="width:200px; height:250px;"></li>
</ul>

<h2>Dragon Ball Super</h2>
<ul class="tcgCards_category"> <!-- Dragon Ball Super -->
  <li><img class="tcgCards_image" src="images\categories\dragon ball super\card1.jpg" style="width:200px; height:250px;"></li>
  <li><img class="tcgCards_image" src="images\categories\dragon ball super\card2.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\dragon ball super\card3.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\dragon ball super\card4.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\dragon ball super\card5.jpg" style="width:200px; height:250px;"></li>
</ul>

<h2>Fresh and Blood</h2>
<ul class="tcgCards_category"> <!-- Fresh and Blood -->
  <li><img class="tcgCards_image" src="images\categories\fresh and blood\card1.jpg" style="width:200px; height:250px;"></li>
  <li><img class="tcgCards_image" src="images\categories\fresh and blood\card2.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\fresh and blood\card3.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\fresh and blood\card4.jpg" style="width:200px; height:250px;"></li>  
  <li><img class="tcgCards_image" src="images\categories\fresh and blood\card5.jpg" style="width:200px; height:250px;"></li>
</ul>
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
</body>
</html>