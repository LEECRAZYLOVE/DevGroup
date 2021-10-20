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

//  $id = "yugi1010";
//  $selectedProduct = $id;

$selectedProduct = $_REQUEST['id'];


$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT Name, Description, Price, Quality, Year, Admin_Class FROM tcg WHERE TCG_ID = '$selectedProduct'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($result)){
                  $name = $row['Name'];
                  $description =  $row['Description'];
                  $price = $row['Price']; 
                  $quality = $row['Quality'];
                  $year = $row['Year'];
                  $adminclass = $row['Admin_Class'];
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
                <div class="product_title_seller">
                <h2 class="name">
                <?php echo $name ?> <br>
                </h2>
                <small>Product by: <a href="javascript:void(0);">Adeline</a></small>
                </div>
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
     </div>
              <fieldset>
                <legend>Similar Products:</legend>
                <?php
              // add the database credentials
              require_once("config.php");
              // make connection to database
              $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                  or die("ERROR: unable to connect to database!");
              // issue query instructions
              $query = "SELECT TCG_ID, Name, Description, Quality, Year, Price FROM tcg WHERE Admin_Class LIKE '$adminclass' ORDER BY Price ASC";
              $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
              // start table
              echo "<table width=\"80%\" border=0>
                      <tr bgcolor=\"#428bca\">
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Description</td>
                      <td>Quality</td>
                      <td>Year</td>
                      <td>Price</td>
                      <td colspan=\"2\"></td>
                      </tr>";
              // populate table rows with data from database
              while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . "<img src=\"boards/" . $row['picture'] . "\">" . "</td>";
                  echo "<td>" . $row['Name'] . "</td>";
                  echo "<td>" . $row['Description'] . "</td>";
                  echo "<td>" . $row['Quality'] . "</td>";
                  echo "<td>" . $row['Year'] . "</td>";
                  echo "<td>R" . $row['Price'] . "</td>";
                  echo "<td>" . "<a href=\"Display_tcg.php?id=" . $row['TCG_ID'] . "\"><input type=\"button\" value=\"View\"></a>" . "</td>";
                  echo "<td>" . "<a href=\"delete.php?id=" . $row['TGC_ID'] . "\"><input type=\"button\" value=\"Add to Cart\"></a>" . "</td>";
                  echo "</tr>";
              }
              // end table
              echo "</table>";
              // close the connection to database
              mysqli_close($conn);
            ?>
              </fieldset>
    
    <!-- end product -->

</main>
</body>
</html>