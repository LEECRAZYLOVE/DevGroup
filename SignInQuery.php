<!doctype html>
<html>
<head> 
    <meta charset="utf-8">   	 
</head> 
<body>
<?php
echo "header(Location:SignIn.php)";
// Accessing the database
 require_once("config.php");

$currentUsername = $_REQUEST['username'];
$currentPassword = $_REQUEST['password'];
$match = "no";
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
       or die("ERROR: Database connection has failed");
$query = "SELECT password FROM user WHERE username = '$currentUsername'";

$result = mysqli_query($conn, $query)
          or die("ERROR: Incorrect password username combination.");

mysqli_close($conn); 

if ($query = $currentPassword) {
//redirecting to the home page once successful
header("Location:HomeGeneral.php");
} else {
    echo "Incorrect password username combination";
    exit();
}

?>
</body>
</html>