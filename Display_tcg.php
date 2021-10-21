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
<main style="color: white;">
<?php
// Accessing the database
require_once("config.php");

//  $id = "yugi1010";
//  $selectedProduct = $id;

$selectedProduct = $_REQUEST['id'];


$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT Name, Description, Price, Quality, Year, Admin_Class, Seller_ID, Picture FROM tcg WHERE TCG_ID = '$selectedProduct'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($result)){
                  $name = $row['Name'];
                  $description =  $row['Description'];
                  $price = $row['Price']; 
                  $quality = $row['Quality'];
                  $year = $row['Year'];
                  $adminclass = $row['Admin_Class'];
                  $sellerID = $row['Seller_ID'];
                  $picture = $row['Picture'];
                }   


$sellerq = "SELECT Username FROM user WHERE USER_ID = '$sellerID'";

$sellresult = mysqli_query($connect, $sellerq)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($sellresult)){
                  $username = $row['Username'];
                }
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
          <div class="picture">
                    <img src="Images/Cards/<?php echo $picture?>">
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
                <small>Product by: <?php echo $username ?></small>
                </div>
                <hr />

                <h3 class="price-container">
                R<?php echo $price ?>
                <small>*includes Shipping</small>
                </h3>
                <div class="col-sm-12 col-md-6 col-lg-6">
                        <button class="btn btn-white btn-default"><a href="AddToCartQuery.php?id=<?php echo $selectedProduct?>" class="btn btn-success btn-lg">Add to cart</a></button> <br>
                    </div>

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

                    <div class="row">

                </div>
                </div>

            </div>
        </div>
        
    </div>
     </div>
              <fieldset>
                <legend>:</legend>
                <?php
              // add the database credentials
              require_once("config.php");
              // make connection to database
              $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                  or die("ERROR: unable to connect to database!");
              // issue query instructions
              $query = "SELECT TCG_ID, Name, Description, Quality, Year, Price, Picture FROM tcg WHERE Admin_Class LIKE '$adminclass' ORDER BY Price ASC";
              $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
              // start table
              echo "<table width=\"80%\" border=0>
                      <tr bgcolor=\"#428bca\">
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Description</td>
                      <td>Condition</td>
                      <td>Year</td>
                      <td>Price</td>
                      <td colspan=\"2\"></td>
                      </tr>";
              // populate table rows with data from database
              while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . "<img src=\"Images/Cards/" . $row['Picture'] . "\" width=\"100\">" . "</td>";
                  echo "<td>" . $row['Name'] . "</td>";
                  echo "<td>" . $row['Description'] . "</td>";
                  echo "<td>" . $row['Quality'] . "/5</td>";
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