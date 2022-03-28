<?php
include ("../comon/db_connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET["id"];
      
        $delete_sql = "DELETE FROM `post` where post_id=$id";

        $conn->query($delete_sql);
        header('Location:' . 'post_view.php');
    }
?>