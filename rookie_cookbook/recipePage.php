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
        <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
        <script type="text/javascript" src="script.js"></script>
        <title>Recipes for Rookies</title>
    </head>
    <body></br>
        <h1 class="titlename">Recipes for Rookies!</h1></br>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="country.php">Select a Continent</a></li>
            <li><a href="recipe.php">Master Recipe List</a></li>
            <li><a href="aboutus.php">About the Creators!</a></li>
          </ul>

          
          </br>
        </br>

        <?php
            switch($_GET['item']){
                case 'Chicken and Rice with Fresh Chorizo':
                    $title = 'Chicken and Rice with Fresh Chorizo';
                    break;
                case 'New Orleans Beignets':
                    $title = 'New Orleans Beignets';
                    break;
                case 'Apple Dutch Baby':
                    $title = 'Apple Dutch Baby';
                break;
                case 'Thai Red Curry Chicken':
                    $title = 'Thai Red Curry Chicken';
                    break;
                case 'Homemade Applesauce':
                    $title = 'Homemade Applesauce';
                    break;
                case 'Krispy Chocolate Cookies':
                    $title = 'Krispy Chocolate Cookies';
                    break;
                case 'Garlic Pasta':
                    $title = 'Garlic Pasta';
                    break;
                case 'Fish Tacos':
                    $title = 'Fish Tacos';
                    break;
                case 'Chocolate, peanut butter, banana sandwitches':
                    $title = 'Chocolate, peanut butter, banana sandwitches';
                    break;
                case 'Tomato Pesto Salmon and Rice Recipe':
                    $title = 'Tomato Pesto Salmon and Rice Recipe';
                    break;
                case 'Tomato Soup with Grilled Cheese Croutons':
                    $title = 'Tomato Soup with Grilled Cheese Croutons';
                    break;
                case 'Apple Cake':
                    $title = 'Apple Cake';
                    break;
                case 'Frozen Grapes':
                    $title = 'Frozen Grapes';
                    break;
                case 'Pollo Bianca':
                    $title = 'Pollo Bianca';
                    break;
                case 'Gnocchi in Tomato Cream Sauce':
                    $title = 'Gnocchi in Tomato Cream Sauce';
                    break;
                case 'Blueberry Boy-Bait':
                    $title = 'Blueberry Boy-Bait';
                    break;
                case 'Mille-Feuille':
                    $title = 'Mille-Feuille';
                    break;
                case 'Finnish Pancakes (thin pancake)':
                    $title = 'Finnish Pancakes (thin pancake)';
                    break;
                case 'Condensed Milk Bread':
                    $title = 'Condensed Milk Bread';
                    break;
                default:
                    echo "no match";
            }
        ?>

        <button onclick="myFunction()"><?php echo $title; ?></button>
        <div id="recipe1">
            <?php
                // echo "Recipie page"."<br>";
                $sql = "SELECT * FROM ingredients;";
                $result = mysqli_query($conn, $sql);

                // //check to make sure we got some results from the database
                $resultCheck = mysqli_num_rows($result);

                switch($_GET['item']){
                    case 'Chicken and Rice with Fresh Chorizo':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_1'] != NULL){

                                echo "-".$row['recipe_1']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_1'] != NULL){

                                echo $count.". ".$row['recipe_1']."<br>";
                                $count++;
                            }
                        }

                        // echo "exit loop"."<br>";
                        break;
                    case 'New Orleans Beignets':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_2'] != NULL){

                                echo "-".$row['recipe_2']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_2'] != NULL){

                                echo $count.". ".$row['recipe_2']."<br>";
                                $count++;
                            }
                        }
                    break;
                    case 'Apple Dutch Baby':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_3'] != NULL){

                                echo "-".$row['recipe_3']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_3'] != NULL){

                                echo $count.". ".$row['recipe_3']."<br>";
                                $count++;
                            }
                        }
                    break;
                    case 'Thai Red Curry Chicken':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_4'] != NULL){

                                echo "-".$row['recipe_4']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_4'] != NULL){

                                echo $count.". ".$row['recipe_4']."<br>";
                                $count++;
                            }
                        }
                    break;

                    case 'Homemade Applesauce':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_5'] != NULL){

                                echo "-".$row['recipe_5']."<br>"."</p>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_5'] != NULL){

                                echo $count.". ".$row['recipe_5']."<br>"."</p>";
                                $count++;
                            }
                        }
                    break;

                    case 'Krispy Chocolate Cookies':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_6'] != NULL){

                                echo "-".$row['recipe_6']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_6'] != NULL){

                                echo $count.". ".$row['recipe_6']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case "Grandma Groeschl's Rolled Oatmeal Cookies":
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_7'] != NULL){

                                echo "-".$row['recipe_7']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_7'] != NULL){

                                echo $count.". ".$row['recipe_7']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Garlic Pasta':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_8'] != NULL){

                                echo "-".$row['recipe_8']."<br>"."</p>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_8'] != NULL){

                                echo $count.". ".$row['recipe_8']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Fish Tacos':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_9'] != NULL){

                                echo "-".$row['recipe_9']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_9'] != NULL){

                                echo $count.". ".$row['recipe_9']."<br>";
                                $count++;
                            }
                        }
                    break;
                    case 'Chocolate, peanut butter, banana sandwitches':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_10'] != NULL){

                                echo "-".$row['recipe_10']."<br>"."</p>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_10'] != NULL){

                                echo $count.". ".$row['recipe_10']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Tomato Pesto Salmon and Rice Recipe':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_11'] != NULL){

                                echo "-".$row['recipe_11']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_11'] != NULL){

                                echo $count.". ".$row['recipe_11']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Tomato Soup with Grilled Cheese Croutons':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_12'] != NULL){

                                echo "-".$row['recipe_12']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_12'] != NULL){

                                echo $count.". ".$row['recipe_12']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Apple Cake':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_13'] != NULL){

                                echo "-".$row['recipe_13']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_13'] != NULL){

                                echo $count.". ".$row['recipe_13']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Frozen Grapes':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_14'] != NULL){

                                echo "-".$row['recipe_14']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_14'] != NULL){

                                echo $count.". ".$row['recipe_14']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Pollo Bianca':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_15'] != NULL){

                                echo "-".$row['recipe_15']."<br>"."</p>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_15'] != NULL){

                                echo $count.". ".$row['recipe_15']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Gnocchi in Tomato Cream Sauce':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_16'] != NULL){

                                echo "-".$row['recipe_16']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_16'] != NULL){

                                echo $count.". ".$row['recipe_16']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Blueberry Boy-Bait':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_17'] != NULL){

                                echo "-".$row['recipe_17']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_17'] != NULL){

                                echo $count.". ".$row['recipe_17'];
                                $count++;
                            }
                        }
                        break;
                    case 'Mille-Feuille':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_18'] != NULL){

                                echo "-".$row['recipe_18']."<br>"."</p>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_18'] != NULL){

                                echo $count.". ".$row['recipe_18']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Finnish Pancakes (thin pancake)':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_19'] != NULL){

                                echo "-".$row['recipe_19']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_19'] != NULL){

                                echo $count.". ".$row['recipe_19']."<br>";
                                $count++;
                            }
                        }
                        break;
                    case 'Condensed Milk Bread':
                        $count = 1;
                        echo "<h4>"."Ingredients"."</h4>";
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_20'] != NULL){

                                echo "-".$row['recipe_20']."<br>";
                                $count++;
                            }
                        }

                        echo "<h4>"."Procedures"."</h4>";
                        $sql = "SELECT * FROM steps;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['recipe_20'] != NULL){

                                echo $count.". ".$row['recipe_20']."<br>";
                                $count++;
                            }
                        }
                        break;
                    default:
                        echo "no match";
                }
            ?>
        </div>
    </body>
</html>