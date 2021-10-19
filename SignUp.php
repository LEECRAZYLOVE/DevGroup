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
    <title>Sign Up</title>   
</head>
<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li style="float:center"> <img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="margin-left: 600px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="images/user-icon.png" alt="User Profile" style="width:50px; height:50px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->
<main>   
  <ul class="form">
     <h1>Create New Account</h1>
<!--Start of sign up form section-->
     
        <form id="form" action="SignUpQuery.php" method = "POST"> <!--Should take you to the client or driver's home page-->

            <label for="firstname">First Name:</label><br>
            <input class="textbox" type="text" id="firstname" id="firstname" name="firstname" placeholder="Jane" required><br><br>

            <label for="Surname">Surname:</label><br>
            <input class="textbox" type="text" id="lastname" name="lastname" placeholder="Doe" required><br><br>

            <label for="email">Email:</label><br>
            <input class="textbox" type="email" id="email" name="email" placeholder="janedoe488@gmail.com" required><br><br>

            <label for="username">Username:</label><br>
            <input class="textbox" type="text" id="username" name="username" placeholder="@jane_doe" required><br><br>

            <label for="contact">Contact Number:</label><br>
            <input class="textbox" type="text" id="contact" name="contact" placeholder = "0783456789" maxlength = "10" pattern = "[0-9]{10}" title ="Please enter your 10 digit cellphone number" required><br><br>

            <label for="password">Password:</label><br>
            <input class="textbox" type="password" id="password" name="password" placeholder = "Password" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>

            <label for="repeat_password"> Repeat Password:</label><br>
            <input class="textbox" type="password" id="repeat_password" placeholder = "Password" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must match the previous password" required><br><br>

            <!--<input type="hidden" name="clientId" id="clientId" value="<?php //echo $clientId; ?> To get the latest clientId so we can make the new one--> 
                
            <input type="submit" id="submit" value="Sign Up">
        
        </form>
    
<!--End of sign up form section-->
        <a href="SignIn.php">Already have an account</a>
  <ul>

<!--To clear the form input after submit button has been clicked-->
<script>
function Clear() {
  document.getElementById("form").reset();
}
</script>

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