<?php
include ("../comon/db_connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET["id"];
      
        $delete_sql = "DELETE FROM `menu` where id=$id";

        $conn->query($delete_sql);
        header('Location:' . 'menu_view.php');
    }
?>