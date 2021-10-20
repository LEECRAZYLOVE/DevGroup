<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS\tcg_view.css">
    <title>View Product</title>   
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
<main style="color: white;">
<?php
// Accessing the database
require_once("config.php");

//$TCG_ID = "fles1596";
//$selectedProduct = $TCG_ID;

 $selectedProduct = $_REQUEST['id'];


$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT Name, Description, Price, Quality, Year FROM tcg WHERE TCG_ID = '$selectedProduct'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($result)){
                  $name = $row['Name'];
                  $description =  $row['Description'];
                  $price = $row['Price']; 
                  $quality = $row['Quality'];
                  $year = $row['Year'];
                }   
                //close connection to the database
                mysqli_close($connect);



?>
<!-- Name: <?php echo $name ?> <br>
Description: <?php echo $description ?> <br>
Price: <?php echo $price ?> <br>
Quality: <?php echo $quality ?> <br>
Year: <?php echo $year ?> <br> -->

    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              
              <div class="image-gallery">
                  <input id="tab1" type="radio" name="tabs" checked>
                  <label for="tab1"><img width="100" height="100" src="Images/Categories/Cardfight/card1.jpg"></label>  
                    
                  <input id="tab2" type="radio" name="tabs">
                  <label for="tab2"><img width="100" height="100" src="Images/Categories/Cardfight/card2.jpg"></label>  
                    
                  <input id="tab3" type="radio" name="tabs">
                  <label for="tab3"><img width="100" height="100" src="Images/Categories/Cardfight/card3.jpg"></label>

                  <section id="content1">
                    <img src="Images/Categories/Cardfight/card1.jpg">
                  </section>  
                    
                  <section id="content2">
                    <img src="Images/Categories/Cardfight/card2.jpg">
                  </section>
                    
                  <section id="content3">
                    <img src="Images/Categories/Cardfight/card3.jpg">
                  </section>
			  </div>

		</div>
    </div>
</section>

            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
            <hr />
                <h2 class="name">
                <?php echo $name ?>
                <small>Product by: <a href="javascript:void(0);">Adeline</a></small>
                </h2>

                <hr />

                <h3 class="price-container">
                R<?php echo $price ?>
                <small>*includes Shipping</small>
                </h3>

                <hr />

                <div class="description description-tabs">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information">
                            <br />
                            <strong>Age:</strong> <br>
                            <?php echo $year ?> <br>
                            <strong>Condition:</strong> <br>
                            <?php echo $quality ?>/5 <br>
                            <strong>Description:</strong> <br>
                            <?php echo $description ?>
                        </div>
                        <div class="tab-pane fade" id="specifications">
                            <br />
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <button class="btn btn-white btn-default"><a href="javascript:void(0);" class="btn btn-success btn-lg">Add to cart</a></button> <br>
                        <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end product -->

</main>
</body>
</html>