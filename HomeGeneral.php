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
  width: 100px;
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
      <li style="float:center"> <img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="margin-left: 600px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="images/user-icon.png" alt="User Profile" style="width:50px; height:50px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
<!--Start of the HTML filter component -->

                                                    <!-- Control buttons -->
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('categories')"> Categories</button>
  <button class="btn" onclick="filterSelection('rating')"> Rating</button>
  <button class="btn" onclick="filterSelection('price')"> Price</button>
  <button class="btn" onclick="filterSelection('age')"> Age</button>
</div>

                    <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container">
  <div class="filterDiv categories">BMW</div>
  <div class="filterDiv age price">Orange</div>
  <div class="filterDiv categories">Volvo</div>
  <div class="filterDiv age">Red</div>
  <div class="filterDiv categories rating">Mustang</div>
  <div class="filterDiv age">Blue</div>
  <div class="filterDiv rating">Cat</div>
  <div class="filterDiv rating">Dog</div>
  <div class="filterDiv price">Melon</div>
  <div class="filterDiv price rating">Kiwi</div>
  <div class="filterDiv price">Banana</div>
  <div class="filterDiv price">Lemon</div>
  <div class="filterDiv price">Cow</div>
</div>

<!--End of the HTML filter section-->

<!--Start of the CSS filter section-->




<!--End of the CSS filter section-->
<h1 style="color:lightcyan; margin-left: 10px"><b>Featured</b></h1>

<!--Start of Categories section to showcase what cards are featured in the store-->
<section class="allCategories">

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
</section>
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