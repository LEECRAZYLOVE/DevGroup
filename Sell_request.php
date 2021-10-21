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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>

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

    <form action="" method="">
            
        Card Name: <br><input class="textbox" id="card_name" type="text" name="name"><br>
            
        <label for="category">Category:</label>
        <br><select name="category" id="cat">

            <option disabled selected value> -- select an option -- </option>
            <option value="magic">Magic</option>
            <option value="yugioh">Yu-Gi-Oh!</option>
            <option value="pokemon">Pokemon</option>
            <option value="cardfight">Cardfight</option>
            <option value="dragonBallSuper">Dragon Ball Super</option>
            <option value="fleshAndBlood">Flesh and Blood</option>

        </select><br>

        <div class="magic box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        <input class="textbox" type="text" name="colour" placeholder="Colour"><br>
        </div>

        <div class="yugioh box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        </div>

        <div class="pokemon box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        </div>

        <div class="cardfight box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        <input class="textbox" type="text" name="nation" placeholder="Nation"><br>
        <input class="textbox" type="text" name="grade" placeholder="Grade"><br>
        <input class="textbox" type="text" name="skillicon" placeholder="Skill Icon"><br>

        </div>

        <div class="dragonBallSuper box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        <input class="textbox" type="text" name="colour" placeholder="Colour"><br>
        <input class="textbox" type="text" name="dbzcharacter" placeholder="Character"><br>
        <input class="textbox" type="text" name="era" placeholder="Era"><br>
        </div>

        <div class="fleshAndBlood box">
        <input class="textbox" type="text" name="setname" placeholder="Set Name"><br>
        <input class="textbox" type="text" name="cardtype" placeholder="Card Type"><br>
        <input class="textbox" type="text" name="rarity" placeholder="Rarity"><br>
        <input class="textbox" type="text" name="subtype" placeholder="Sub-Type"><br>
        <input class="textbox" type="text" name="class" placeholder="Class"><br>
        </div>
            
        Condition: <br>
        <input class="textbox" type="" name="condition"><br>
            
        Age (Year manufactured): <br>
        <input class="textbox" type="number" min="1900" max="2099" step="1" value="2021" name="age"><br>
            
        Description: <br>
        <textarea type="text" name="description" cols="40"></textarea><br>
            
        Images: <br>
        <input type="file" id="img" name="image" accept="image/*"><br>

        <br><input class="button" type="submit" value="Submit">
    </form>

</body>

<footer>
    <p>&copy; 2021 NameOfStore.&nbsp;&nbsp; All Rights Reserved. &nbsp;&nbsp;Proudly created by
        NameOfStore
    </p>
</footer>

</html>