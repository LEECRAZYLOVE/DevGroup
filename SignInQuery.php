<?php
// Accessing the database
require_once("config.php");

$currentUsername = $_REQUEST['username'];
$currentPassword = $_REQUEST['password'];

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
       or die("ERROR: Database connection has failed");
$query = "SELECT Password, User_ID, UserType FROM user 
            WHERE Username = '$currentUsername'";

$result = mysqli_query($conn, $query)
          or die("ERROR: Incorrect password username combination.");

while($row = mysqli_fetch_array($result))
{
    $password = $row['Password'];
    $currentuser = $row['User_ID'];
    $type = $row['UserType'];
}

mysqli_close($conn); 

//redirecting to the home page once successful
if ($password== $currentPassword) {
    if ($type == "General") {
        header("Location:homegeneral.php?id=" . $currentuser);
    }
    if ($type == "Admin") {
        header("Location:homeadmin.php?id=");
    }    
} else {
    echo "Incorrect password and username combination";
}

?>