<?php

$currentuser = $_COOKIE['user'];

//request id auto increments
$setname = $_REQUEST['setname'];
$cardname = $_REQUEST['card_name'];
$category = $_REQUEST['category'];
$adminid = "mert9312";
$sellerid = 0;
$status = NULL;
$quality = $_REQUEST["quality"];

$cardtype = $_REQUEST['cardtype'];
$rarity = $_REQUEST['rarity'];
$colour = $_REQUEST['colour'];
$nation = $_REQUEST['nation'];
$grade = $_REQUEST['grade'];
$skillicon = $_REQUEST['skillicon'];
$dbzcharacter = $_REQUEST['dbzcharacter'];
$era = $_REQUEST['era'];
$subtype = $_REQUEST['subtype'];
$class = $_REQUEST['class'];

$age = $_REQUEST['age'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$picture = $_REQUEST['image'];

//Image Upload
$target_dir = "Images/Cards/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

$image = $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.$image);



require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

// $query =  "INSERT INTO sell_request (Admin_ID, Card_Name, Category, Set_Name, Card_Type, Rarity, Colour, Nation, Grade, Skill_Icon, Character, Era, Sub_Type, Class, Age, Description, Image, Price, Seller_ID, Quality)
//           VALUES ('$adminid', '$cardname', '$category','$setname', '$cardtype', '$rarity', '$colour', '$nation', '$grade', '$skillicon', '$dbzcharacter', '$era', '$subtype', '$class', '$age', '$description', '$image', '$price', '$sellerid', '$quality')";

$query =  "INSERT INTO sell_request (Admin_ID, Card_Name, Category, Age, Description, Image, Price, Seller_ID, Quality, Set_Name)
VALUES ('$adminid', '$cardname', '$category', '$age', '$description', '$picture', '$price', '$sellerid', '$quality', '$setname')";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

 //close connection to the database
 mysqli_close($connect);
 header("refresh:0; homegeneral.php?id=$currentuser");
 echo '<script> 
         alert("Sell request sent!");
         </script>'; //Alerts the user redirects back to account page

?>