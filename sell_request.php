<!DOCTYPE html>
<html lang="en">
<body>

    <form action="" method="">
            
        Card name: <input class="textbox" type="text" name="name"><br>
            
        <label for="category">Category</label>
        <select name="category" id="cat">

            <option value="magic">Magic</option>
            <option value="yu-gi-oh">Yu-Gi-Oh!</option>
            <option value="pokemon">Pokemon</option>
            <option value="cardfight">Cardfight</option>
            <option value="dragonBallSuper">Dragon Ball Super</option>
            <option value="feleshAndBlood">Flesh and Blood</option>

        </select><br>
            
        Condition: <input class="textbox" type="" name="condition"><br>
            
        Age: <input class="textbox" type="number" min="1900" max="2099" step="1" value="2021" name="age"><br>
            
        Description: <input class="textbox" type="text" name="description"><br>
            
        Images: <input type="file" id="img" name="image" accept="image/*"><br>

        <input class="button" type="submit" value="Submit">
    </form>

</body>
</html>