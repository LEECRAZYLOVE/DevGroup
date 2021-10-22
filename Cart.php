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
<main>
<div class="invoice-box">
  <table cellpadding="0" cellspacing="0">
    <tr class="top">
      <td colspan="2">
        <table>
          <tr>
            <td class="title">
              <img src="images/wallet.png" style="width: 100%; max-width: 300px" />
            </td>

            <td>              
              <br >Created: 22 October 2021<br />
            </td>
          </tr>
        </table>
      </td>
    </tr>

    

    <tr class="information">
      <td colspan="2">
        <table>
          <tr>
            <td>
              Ultimate TCG, Inc.<br />
              Piet Retief Straat<br />
              Stellenbosch, WC 7100
            </td>

            <td>
              Bank - First National Bank.<br />
              Acc. Number - 623652052688<br />
              Branch Code - 5400
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <?php
//connect to datbase
require_once("config.php");

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

  //query 
$query = "SELECT TCG_ID, Name, Price, Picture FROM tcg WHERE OrderStatus = 'Cart'";

$result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

  // start table
              echo "<table width=\"80%\" border=0>
                      <tr bgcolor=\"#428bca\">
                      <td>Picture</td>
                      <td>Card Name</td>
                      <td>Price</td>
                      </tr>";
              // populate table rows with data from database
              while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . "<img src=\"Images/Cards/" . $row['Picture'] . "\" width=\"100\">" . "</td>";
                  echo "<td>" . $row['Card_Name'] . "</td>";
                  echo "<td>R" . $row['Price'] . "</td>";
                  echo "</tr>";
              }
              // end table
              echo "</table>";

            //   $pricequery = "SELECT Sum(Price) FROM tcg WHERE OrderStatus = 'Active'";

            //   $priceresult = mysqli_query($connect, $pricequery)
            //                   or die("<strong style = \"color : red; \"> Could not execute query! </strong>");
             
            //  while ($row = mysqli_fetch_array($priceresult)) {
            //   echo "<h2>".$row['Price']."<h2>";}
            echo "<a href=\"Orderstatus.php?id=" . $row['TCG_ID'] . "\"><input type=\"button\" value=\"Confirm Payment\"></a>";
                              // close the connection to database

mysqli_close($connect);


?>

 <!-- CSS Start-->
 <style>
  .invoice-box {
    max-width: 800px;
    margin: auto;
    padding: 30px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    font-size: 16px;
    line-height: 24px;
    font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color: #555;
  }

  .invoice-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
  }

  .invoice-box table td {
    padding: 5px;
    vertical-align: top;
  }

  .invoice-box table tr td:nth-child(2) {
    text-align: right;
  }

  .invoice-box table tr.top table td {
    padding-bottom: 20px;
  }

  .invoice-box table tr.top table td.title {
    font-size: 45px;
    line-height: 45px;
    color: #333;
  }

  .invoice-box table tr.information table td {
    padding-bottom: 40px;
  }

  .invoice-box table tr.heading td {
    background: #eee;
    border-bottom: 1px solid #ddd;
    font-weight: bold;
  }

  .invoice-box table tr.details td {
    padding-bottom: 20px;
  }

  .invoice-box table tr.item td {
    border-bottom: 1px solid #eee;
  }

  .invoice-box table tr.item.last td {
    border-bottom: none;
  }

  .invoice-box table tr.total td:nth-child(2) {
    border-top: 2px solid #eee;
    font-weight: bold;
  }

  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td {
      width: 100%;
      display: block;
      text-align: center;
    }

    .invoice-box table tr.information table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  }

  /** RTL **/
  .invoice-box.rtl {
    direction: rtl;
    font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  }

  .invoice-box.rtl table {
    text-align: right;
  }

  .invoice-box.rtl table tr td:nth-child(2) {
    text-align: left;
  }
</style>

<!-- Cart end-->

</main>

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