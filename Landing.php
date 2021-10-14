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
    <title>Welcome</title>   
</head>
<body>
<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul style="list-style-type:none;" class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <li style="float:center"> <img id="logo" src="images/TCGplayer-logo.png" alt="Store logo" style="margin-left: 400px; width:140px; height:80px;"> </li>
      <li style="float:right"> <a href="UserProfile.html"> <img src="images/user-icon.png" alt="User Profile" style="margin-top: 0px; width:40px; height:40px;"></a> </li>
    </ul>
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<main>
    <h1><b>Featured</b></h1>

<!--Start of About Us Slideshow section-->
<section class="uppersection">
<ul class="aboutUs">
  <li>  
    <div class="aboutPhotos">
        <img class="w3-circle aboutPhoto" src="Icons\Beyonce.jpg" style="width:500px; height:350px;">
        <img class="w3-circle aboutPhoto" src="Icons\noname.jpg" style="width:500px; height:350px;">
        <img class="w3-circle aboutPhoto" src="Icons\Lauryn.jpg" style="width:500px; height:350px;">
        <img class="w3-circle aboutPhoto" src="Icons\Ami.jpg" style="width:500px; height:350px;">
        <img class="w3-circle aboutPhoto" src="Icons\Kanye.jpg" style="width:500px; height:350px;">
    </div>
  </li>
  <li>
    <div class="aboutBios">
        <p class="aboutBio"><b>Litha Stuurman</b><br><br>Rhodes University, BSc Computer Science and Information Systems<br>Systems Programmer and Designer<br>Mantra: "Success = Talent X Effort^2"</p>
        <p class="aboutBio"><b>Ncebakazi Gxako</b><br><br>Rhodes University, BSc Applied Mathematics and Information Systems<br>Programmer and Tester<br>Mantra: "And we can do all things through Christ who strengthens us"</p>
        <p class="aboutBio"><b>Sandzisile Nxumalo</b><br><br>Rhodes University, BSc Economics and Information Systems<br>Project Manager and Tester<br>Mantra: "Success = Talent x Effort^2"</p>
        <p class="aboutBio"><b>Nyasha Munyoro</b><br><br>Rhodes University, BCom Management and Information Systems<br>Systems Analyst and Designer<br>Mantra: "Success = Talent x Effort^2"</p>
        <p class="aboutBio"><b>Simphiwe Sobici</b><br><br>Rhodes University, BSc Computer Science and Information Systems<br>Systems Programmer and Designer<br>Mantra: "Success = Talent x Effort^2"</p>
    </div>
  </li>      
</ul>
</section>
<!-- Manual slideshow <div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
  </div>
  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
  <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
  <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
</div> -->

<script>
var myIndex = 0;
slideshow();

function slideshow() {
  var i;
  var x = document.getElementsByClassName("aboutPhoto");
  var y = document.getElementsByClassName("aboutBio");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    y[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";
  y[myIndex-1].style.display = "block";  
  setTimeout(slideshow, 4000); // Change image every 2 seconds
}

//function plusDivs(n) {        /Manual slideshow
//  showDivs(slideIndex += n);
//}

//function currentDiv(n) {     //Manual slideshow
//  showDivs(slideIndex = n);
//}

/*var slideIndex = 1;
showDivs(slideIndex);

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";*/
//}
</script>
</section>
<!--End of About Us Slideshow section-->

<!--Start of lowersection-->
<aside>
    <ul class="lowersection">
        <li> 
          <div class="form">             
                <h3>Contact Us</h3>
                <form action="ContactUsQuery.php"> <!--Should store information into the database-->
                    <label for="firstname">First Name:</label><br>
                    <input class="textbox" type="text" id="firstname" name="fname" placeholder="Jane"><br>

                    <label for="surname">Surname:</label><br>
                    <input class="textbox" id="surname" type="text" name="surname" placeholder="Doe"><br>

                    <label for="email">Email:</label><br>
                    <input class="textbox" type="email" id="email" name="email" placeholder="janedoe488@gmail.com"></br>
     
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" placeholder="Type your message here..." rows="10" cols="40"></textarea><br><br>

                    <input class="button" type="submit" id="submit" value="Send">
                </form>  
            </div>
        </li>
        <li>
          <div class="questions">
              <h3>Frequently asked questions</h3>
                <ul class = fqas>
                    <li>    
                        <select id="fqa1">
                            <option>How can I make a booking</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </li><br>
                    <li>
                        <select id="fqa2">
                            <option>Is it possible to pay using a debit/credit card?</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select> 
                    </li><br>
                    <li>
                        <select id="fqa3">
                            <option>How do I customize my booking</option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </li>
                </ul>
          </div>
    </ul>
</aside>
<!--End of lowersection-->
</main>
<!--Just a footer for profesionalism-->
<footer>
    <p>&copy; 2020 On-The-Go.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        Trademark
    </p>
    <p>
        <small>Last modified:
            <time>3 October 2020</time>
        </small>
    </p>
</footer>
</html>`    qZ