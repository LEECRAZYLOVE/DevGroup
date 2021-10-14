<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS\LogIn-SignUp.css">
</head>
<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels">
      <li style="float:center"> <img id="logo" src="/Logo.png" alt="On The Go logo" style="margin-left: 580px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="icons/User.png" alt="User Profile" style="width:40px; height:40px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
   <ul class="form">
     <li> <h1>Sign In</h1> </li>
<!--Start of log in form section-->      
     <li> 
       <form id="form" action="LogInQuery.php" method="POST" onsubmit="Clear()"> <!--Should take you to the admin, client or driver's home page-->
        <label for="username">Username:</label><br>
        <input class="textbox" type="username" id="username" name="username" placeholder="janedoe488@gmail.com"></br><br>

        <label for="password">Password:</label><br>
        <input class="textbox" type="password" id="password" name="password" placeholder="Password"></br></br>
        
        <input class="button" type="submit" id="submit" value="Log In"><br><br>
       </form>
     </li>
<!--End of log in form section-->
     <li> <a href="SignUp.php">or create new account</a> </li>
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