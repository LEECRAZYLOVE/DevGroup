<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body>

<?php
//add appropriate fields
require_once("config.php");

    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // request tcg id from add to cart btn
    $tcgid = $_REQUEST['id'];
    $userid = "Will5471";
    $price = 0;

    $priceq = "SELECT Price FROM tcg WHERE TCG_ID = '$tcgid'";

    $priceresult = mysqli_query($connect, $priceq)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                while($row = mysqli_fetch_array($priceresult)){
                  $price = $row['Price'];}

    // query instructions 
    $query =  "INSERT INTO cart_item (TCG_ID, Buyer_ID, Price)
                VALUES ('$tcgid', '$userid', '$price')";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    echo '<script> 
            alert("Item added to cart.");
            window.location.href="Display_tcg.php";
            </script>'; //Alerts the user redirects back to account page   
?>
</body> 

</html>