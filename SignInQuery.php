<?php
// Accessing the database
require_once("config.php");

$currentUsername = $_REQUEST['username'];
$currentPassword = $_REQUEST['password'];

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
       or die("ERROR: Database connection has failed");
$query = "SELECT password FROM user WHERE UserName = '$currentUsername'";

$result = mysqli_query($conn, $query)
          or die("ERROR: Incorrect password username combination.");

while($row = mysqli_fetch_array($result))
{
    $password = $row['password'];
}

          mysqli_close($conn); 

if ($password= $currentPassword) {
//redirecting to the home page once successful
header("Location:HomeGeneral.php");
} else {
    echo "Incorrect password username combination";
    //exit();
}

?>