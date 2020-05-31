<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
        <script type="text/javascript" src="script.js"></script>
        <title>Recipes for Rookies</title>
    </head>
    <body></br>
        <h1 class="titlename">Recipes for Rookies!</h1></br>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="country.php">Select a Continent</a></li>
            <li><a href="recipe.php">Search for a Recipe</a></li>
            <li><a href="aboutus.php">About the Creators!</a></li>
            <li><a href="addrecipe.php">Add Your Own Personal Recipe</a></li>
          </ul>

          
          </br>
        </br>
<div class="rows" id="boxes">
        <div class="stuff1">
        <div  id="textwithin">
            <h2>Search</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type in the name of your favourite recipe..." title="Type in a name">

<ul id="myUL">
  <li><a href="recipePage.php?item=<?php echo 'Tomato Pesto Salmon and Rice Recipe' ?>">Tomato Pesto Salmon and Rice Recipe</a></li>
  <li><a href="recipePage.php?item=<?php echo 'Tomato Soup with Grilled Cheese Croutons' ?>">Tomato Soup with Grilled Cheese Croutons</a></li>

  <li><a href="recipePage.php?item=<?php echo 'Chicken and Rice with Fresh Chorizo' ?>">Chicken and Rice with Fresh Chorizo</a></li>
  <li><a href="recipePage.php?item=<?php echo 'Pollo Bianca' ?>">Pollo Bianca </a></li>

  <li><a href="recipePage.php?item=<?php echo 'Gnocchi in Tomato Cream Sauce' ?>">Gnocchi in Tomato Cream Sauce </a></li>
  <!-- <li><a href="recipePage.php?item=<//?php echo 'Gnocchi in Tomato Cream Sauce' ?>">Slow Cooker Butternut Squash Soup</a></li>
  <li><a href="recipePage.php?item=//<//?php echo 'Gnocchi in Tomato Cream Sauce' ?>">Taiwanese Castella Cake </a></li> -->
  <li><a href="recipePage.php?item=<?php echo 'Condensed Milk Bread' ?>">Condensed Milk Bread </a></li>
  <li><a href="recipePage.php?item=<?php echo 'Finnish Pancakes (thin pancake)' ?>">Finnish Pancakes </a></li>
  <li><a href="recipePage.php?item=<?php echo 'Mille-Feuille' ?>">Mille-Feuille</a></li>
  <li><a href="recipePage.php?item=<?php echo 'Blueberry Boy-Bait' ?>">Blueberry Boy-Bait </a></li>
  <li><a href="recipePage.php?item=<?php echo 'Frozen Grapes' ?>">Frozen Grapes </a></li>
  <li><a href="recipePage.php?item=<?php echo 'Apple Cake' ?>">Apple Cake </a></li>
  <li><a href="recipePage.php?item=<?php echo 'Chocolate, peanut butter, banana sandwitches' ?>">Chocolate, Peanut butter, Banana Sandwiches </a></li>

</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

        
    </body>
</html>