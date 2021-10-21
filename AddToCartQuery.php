<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body>

<?php
//add appropriate fields

    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // request tcg id from add to cart btn
    $tcgid = $_REQUEST['id'];

    //implent user id request

    // query instructions 
    $query = "UPDATE cart_item SET TCG_ID = '$tcgid'
                WHERE USER_ID = \"Will5471\"";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);
    echo '<script> 
            alert("Your email was successfully updated!");
            window.location.href="ManageAccount_general.php";
            </script>'; //Alerts the user redirects back to account page   
?>
</body> 

</html>