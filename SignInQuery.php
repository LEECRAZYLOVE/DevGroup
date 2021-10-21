<?php


// Accessing the database
require_once("config.php");

$currentUsername = $_REQUEST['username'];
$currentPassword = $_REQUEST['password'];

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
       or die("ERROR: Database connection has failed");
$query = "SELECT Password, User_ID FROM user 
            WHERE Username = '$currentUsername'";

$result = mysqli_query($conn, $query)
          or die("ERROR: Incorrect password username combination.");

while($row = mysqli_fetch_array($result))
{
    $password = $row['Password'];
    $currentuser = $row['User_ID'];
}
mysqli_close($conn); 

if ($password== $currentPassword) {
//redirecting to the home page once successful
echo '<script> 
window.location.href="HomeGeneral.php?id= <?php echo $currentuser; ?> ";
</script>'; //Alerts the user redirects back to account page   
} else {
    echo "Incorrect password and username combination";
    //exit();
}

?>