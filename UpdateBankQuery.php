<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

  <?php
      $currentuser = $_COOKIE["user"];

    //this page will be used to add client information when they sign up to the dabatase
    $bank = $_REQUEST['bank'];
    $branch = $_REQUEST['branch'];
    $account = $_REQUEST['account'];

      require_once("config.php");
    //connecting to the database
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
                or die("<strong style = \"color : red; \"> Could not connect to the database! </strong>");

    // query instructions 
    $query = "INSERT INTO eft(Buyer_ID, BankName, AccountNum, BranchCode) 
              VALUES ('$currentuser', '$bank',  '$account' ,'$branch')";

    $result = mysqli_query($connect, $query)
                or die("<strong style = \"color : red; \"> Could not execute query! </strong>");

    //close connection to the database
    mysqli_close($connect);

    echo '<script> 
    alert("Your eft details have successfully added!");
    window.location.href="ManageAccount_general.php";
    </script>'; //Alerts the user redirects back to account page    
  ?> 

</body> 
</html>