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
      <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:center; width:140px; height:80px;"> </li>
      <li> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
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
        $query = "SELECT * FROM tcg_order";
        $result = mysqli_query($conn, $query) or die("could not retrieve data!");

        //Table headings
            echo "<table width=\"80%\" border=0>
                <tr style=\"background-color: #428bca;\">
                    <td>Order ID</td>
                    <td>Status</td>
                    <td>Total Price</td>
                </tr>";
        //table content
            while ($row = mysqli_fetch_array($result))
             {
                echo "<tr>";
                echo "<td>".$row['Order_ID']."</td>";
                echo "<td>".$row['Status']."</td>";              
                echo "<td>".$row['TotalPrice']."</td>";
                echo "</tr>";
          
            }

        echo "</table>";
        //close connection
        mysqli_close($conn);    
    
    ?>

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