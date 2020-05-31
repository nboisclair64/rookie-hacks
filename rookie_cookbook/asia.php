<?php
    include_once "includes/dbh.inc.php";
    session_start();
    session_unset();
?>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
        <script type="text/javascript" src="script.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
        <title>Recipes for Rookies</title>
    </head>
    <body></br>
        <h1 class="titlename">Recipes for Rookies!</h1></br>
        <ul>
            <li class="back"><a class="active" href="country.php"> Back to the Interactive Map</a></li>
          </ul>

          
          </br>
        </br>
        <div class="rows" id="boxes">
        <div class="stuff1">
        <div  id="textwithin">
        <h1 > ~ Welcome to Asia ~</h1></div></div></div>
        <div class="extra">
            <button onclick="myFunction()">Healthy Snacks</button>
            <div id="recipe1">
                <div class="moveover">

                <h3><a href="recipePage.php?item=<?php echo 'Thai Red Curry Chicken' ?>">Thai Red Curry Chicken</a></h3>
                <p>Thailand</p>

                <h3><a href="recipePage.php?item=<?php echo 'Condensed Milk Bread' ?>">Condensed Milk Bread</a></h3>
                <p>Japanese</p>
            </div>
            </div>
        </div>


            <div class="extra">
            <button onclick="myFunction2()">University Friendly</button>
            <div id="recipe2">
                <div class="moveover">
                <h3>None</h3>
                <p></p>
            </div>
            </div>
        </div>


            <div class="extra">
            <button onclick="myFunction3()">Plant Eaters Only</button>
            <div id="recipe3">
                <div class="moveover">
                <h3>None</h3>
                <p></p>
            </div>
            </div>
        </div>


            <div class="extra">
            <button onclick="myFunction4()">Desserts</button>
            <div id="recipe4">
                <div class="moveover">
                <h3>None</h3>
                <p></p>
            </div>
            </div>
        </div>