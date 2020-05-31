<?php

    $dbServerName = "localhost";    //change this when using an online server
    $dbUserName = "root";   //only change when this is an online server or if you change the username and password of the local
    $dbPassword = "";   //default for XAMPP, will have to change when using the online database with the password
    $dbName = "rookie_cookbook";    //name of database

    $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);


?>