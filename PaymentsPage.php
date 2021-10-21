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
<title>Payments</title>

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
</head>

<body>
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
              <!-- Invoice #: 123<br />
              Created: January 1, 2015<br />
              Due: February 1, 2015
            </td>
          </tr>
        </table>
      </td>
    </tr> -->

    <!-- php for table start -->
    <?php 
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

    <!-- php for table end -->


    <tr class="information">
      <td colspan="2">
        <table>
          <tr>
            <td>
              Sparksuite, Inc.<br />
              12345 Sunny Road<br />
              Sunnyville, CA 12345
            </td>

            <td>
              Acme Corp.<br />
              John Doe<br />
              john@example.com
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="heading">
      <td>Payment Method</td>

      <td>Check #</td>
    </tr>

    <tr class="details">
      <td>Check</td>

      <td>1000</td>
    </tr>

    <tr class="heading">
      <td>Item</td>

      <td>Price</td>
    </tr>

    <tr class="item">
      <td>Website design</td>

      <td>$300.00</td>
    </tr>

    <tr class="item">
      <td>Hosting (3 months)</td>

      <td>$75.00</td>
    </tr>

    <tr class="item last">
      <td>Domain name (1 year)</td>

      <td>$10.00</td>
    </tr>

    <tr class="total">
      <td></td>

      <td>Total: $385.00</td>
    </tr>
  </table>
</div>
</body>
</main>

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