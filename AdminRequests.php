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
              // add the database credentials
              require_once("config.php");
              // make connection to database
              $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                  or die("ERROR: unable to connect to database!");
              // issue query instructions
              $query = "SELECT * FROM sell_request WHERE Admin_ID = 'mert9312'";
              $result = mysqli_query($conn, $query) or die("ERROR: unable to execute query!");
              // start table
              echo "<table width=\"50%\" border=0>
                      <tr bgcolor=\"#428bca\">
                      <td>Picture</td>
                      <td>Card_Name</td>
                      <td>Category</td>
                      <td>Set_Name</td>
                      <td>Rarity</td>
                      <td>Price</td>
                      <td colspan=\"2\"></td>
                      </tr>";
              // populate table rows with data from database
              while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . "<img src=\"Images/Cards/" . $row['Image'] . "\" width=\"100\">" . "</td>";
                  echo "<td>" . $row['Card_Name'] . "</td>";
                  echo "<td>" . $row['Category'] . "</td>";
                  echo "<td>" . $row['Set_Name'] . "/5</td>";
                  echo "<td>" . $row['Rarity'] . "</td>";
                  echo "<td>R" . $row['Price'] . "</td>";
                  echo "<td>" . "<input type=\"button\" value=\"ACCEPT\"></a>" . "</td>";
                  echo "<td>" . "<input type=\"button\" value=\"DECLINE\"></a>" . "</td>";
                  // echo "<td>" . "<a href=\"Display_tcg.php?id=" . $row['TCG_ID'] . "\"><input type=\"button\" value=\"D\"></a>" . "</td>";   //I want these to be a and d buttons
                  // echo "<td>" . "<a href=\"delete.php?id=" . $row['TGC_ID'] . "\"><input type=\"button\" value=\"A\"></a>" . "</td>";
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

<!--Just a footer for profesionalism-->
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