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


<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li> <a href="HomeAdmin.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:left; width:160px; height:100px;"> </li>
      <li style="float:right"> <a href="Landing.php"><img id ="signout" src="images/signout.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="resetpassword.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="AdminRequests.php"><img id ="history" src="images/history.png" alt="history" style="text-align:right; width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="AdminPayments.php"><img id ="payments" src="images/wallet.png" alt="signout" style="text-align:right; width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>

<?php

require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

$query = "SELECT tcg.Name AS Name,
tcg.TCG_ID AS TCG_ID,
tcg.NAME AS Card_Name,
 tcg.Status AS Status,
  tcg.Picture AS Picture, 
  tcg.Price AS Price, 
  user.Username AS Seller_Name
  FROM tcg INNER JOIN user ON
  tcg.Seller_ID=user.User_ID
  WHERE tcg.Status = 'U'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

                // while($row = mysqli_fetch_array($result)){
                //   $price = $row['Price'];
                //   $name = $row['Name'];
                //   $picture = $row['Picture'];
                //   $status = $row['Status'];
                // }
  // start table
              echo "<table width=\"80%\" border=0>
                      <tr bgcolor=\"#428bca\">
                      <td>Picture</td>
                      <td>Card Name</td>
                      <td>Price</td>
                      <td>Seller Name</td>
                      <td></td>
                      </tr>";
              // populate table rows with data from database
              while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . "<img src=\"Images/Cards/" . $row['Picture'] . "\" width=\"100\">" . "</td>";
                  echo "<td>" . $row['Card_Name'] . "</td>";
                  echo "<td>R" . $row['Price'] . "</td>";
                  echo "<td>" . $row['Seller_Name'] . "</td>";
                  echo "<td>" . "<a href=\"PaidQuery.php?id=" . $row['TCG_ID'] . "\"><input type=\"button\" value=\"PAID\"></a>" . "</td>";
                  echo "</tr>";
              }
              // end table
              echo "</table>";
              // close the connection to database

mysqli_close($connect);


?>


</main>

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
</body>
</html>