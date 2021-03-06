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
      <!-- <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:left; width:160px; height:100px;"> </li> -->
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
      
       <form id="form" action="SignInQuery.php" method="post"> <!--Should take you to the admin, client or driver's home page-->
        <label for="username">Username:</label><br>
        <input class="textbox" type="username" id="username" name="username" placeholder="janedoe488@gmail.com"></br><br>
    
        <label for="password">Password:</label><br>
        <input class="textbox" type="password" id="password" name="password" placeholder="Password"></br></br>
        
        <input class="button" type="submit" id="submit" value="Sign In"><br><br>
       </form>
     
<!--End of log in form section-->
      <br><a style="color:darkcyan" href="SignUp.php">Create new account</a> 
   </ul>
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