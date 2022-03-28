<?php
$db_sever = "localhost";
    $db_username = "root";
    $db_pass = "";
    $db_name = "webtintuc";

    $conn = new mysqli($db_sever, $db_username, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection fail:" . $conn->connect_error);
    }
    ?>