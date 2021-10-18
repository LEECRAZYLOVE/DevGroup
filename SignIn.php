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
    <title>SignIn</title>   
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
      <h1>Sign In</h1>
<!--Start of log in form section-->      
      
       <form id="form" action="SignInQuery.php" method="POST" onsubmit="Clear()"> <!--Should take you to the admin, client or driver's home page-->
        <label for="username">Username:</label><br>
        <input class="textbox" type="username" id="username" name="username" placeholder="janedoe488@gmail.com"></br><br>
    
        <label for="password">Password:</label><br>
        <input class="textbox" type="password" id="password" name="password" placeholder="Password"></br></br>
        
        <input class="button" type="submit" id="submit" value="Log In"><br><br>
       </form>
     
<!--End of log in form section-->
      <a style="color: white" href="SignUp.php">Create new account</a> 
   </ul>
</main>

<!--To clear the form input after submit button has been clicked-->
<script>
function Clear() {
  document.getElementById("form").reset();
}
</script>



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