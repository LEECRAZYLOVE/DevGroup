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
    <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:center; width:160px; height:100px;"> </li>
      <li style="float:right"> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="AdminRequests.php"><img id ="history" src="images/history.png" alt="history" style="width:50px; height:50px;"> </li>
      <li style="float:right"> <a href="Landing.php"><img id ="signout" src="images/signout.png" alt="signout" style="width:50px; height:50px;"> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->


    <?php 
    $currentuser = $_COOKIE['user'];
        //database credentials
        require_once("config.php");
        //connect
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
            or die("could not connect to database");
        
        //issue query instructions
        $query = "SELECT * FROM tcg WHERE Seller_ID = '$currentuser'" ;
        $result = mysqli_query($conn, $query) or die("could not retrieve data!");

        //Table headings
                echo "<table width=\"80%\" border=0>
                <tr bgcolor=\"#428bca\">
                <td>Picture</td>
                <td>Card Name</td>
                <td>Price</td>
                <td></td>
                </tr>";
        //table content
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . "<img src=\"Images/Cards/" . $row['Picture'] . "\" width=\"100\">" . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>R" . $row['Price'] . "</td>";
            echo "<td>" . "<a href=\"PaidQuery.php?id=" . $row['TCG_ID'] . "\"><input type=\"button\" value=\"PAID\"></a>" . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        //close connection
        mysqli_close($conn);    
    
    ?>

<!--Just a footer for profesionalism-->
<footer>
    <p>&copy; 2021 Ultimate TCG.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        Notrem, Stuurman & Van der Merwe
    </p>
    <p>
        <small>Last modified:
            <time>14 October 2021</time>
        </small>
    </p>
</footer>
</body>
</html>