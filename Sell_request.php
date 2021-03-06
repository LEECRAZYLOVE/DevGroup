<!DOCTYPE html>
<html lang="en">

<head>

    <script>
        $(function () {
            $("#card_name").autocomplete({
                source: "Sell_request_autocomplete.php",
            });
        });
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS\Forms.css">
    <title>Sell Request</title>   

</head>

<body>

<!--Start of the global navigation section-->
<header>
  <nav>
    <!--Start of header_labels-->
    <div class = "global_nav">
    <ul class = "header_labels"> <!--Might have to change this class name when we get to CSS-->
      <!-- <li> <a href="HomeGeneral.php"><img id="logo" src="images/logo.png" alt="Store logo" style="text-align:center; width:140px; height:80px;"> </li>
      <li> <a href="ManageAccount_general.php"><img id ="ManageAccount" src="images/user-icon.png" alt="manageaccount" style="width:50px; height:50px;"> </li>
    </ul> -->
    </div>
    <!--End header_labels--> 
  </nav>
</header>
<!--End of the global navigation section-->

<h1>Sell Request:</h1>

    <form action="Sell_Request_Query.php" method="POST">
        
        Card Name: <br><input class="textbox" id="card_name" type="text" name="card_name" required><br>
            
        <label for="category">Category:</label>
        <br><select name="category" id="cat" required>
            <option disabled selected value> -- select an option -- </option>
            <option value="magic">Magic</option>
            <option value="yugioh">Yu-Gi-Oh!</option>
            <option value="pokemon">Pokemon</option>
            <option value="cardfight">Cardfight</option>
            <option value="dragonBallSuper">Dragon Ball Super</option>
            <option value="fleshAndBlood">Flesh and Blood</option>
        </select><br>

        <fieldset>
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        <input class="textbox" type="text" name="colour" placeholder="Colour"><br>
        <input class="textbox" type="text" name="nation" placeholder="Nation"><br>
        <input class="textbox" type="text" name="grade" placeholder="Grade"><br>
        <input class="textbox" type="text" name="skillicon" placeholder="Skill Icon"><br>
        <input class="textbox" type="text" name="dbzcharacter" placeholder="Character"><br>
        <input class="textbox" type="text" name="era" placeholder="Era"><br>
        <input class="textbox" type="text" name="subtype" placeholder="Sub-Type"><br>
        <input class="textbox" type="text" name="class" placeholder="Class" ><br>
        </fieldset>

        Age (Year manufactured): <br>
        <input class="textbox" type="number" min="1900" max="2022" step="1" value="" name="age" required><br>
        
        Quality: <br>
        <input class="textbox" type="number" min="0" max="5" step="1" value="" name="quality" required><br>
                
        Description: <br>
        <textarea type="text" name="description" cols="40" required></textarea><br>
        
        Price: <br>
        <input type="number" id="price" name="price" min="1" step="any" required><br>

        Images: <br>
        <input type="file" id="img" name="image" accept="image/*"><br>

        <br><input class="button" type="submit" value="Submit">
    </form>

</body>

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
</html>