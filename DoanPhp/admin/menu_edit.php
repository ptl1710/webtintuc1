<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("../comon/db_connect.php");
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET["id"];
        $sql = "SELECT * FROM `menu` WHERE id=" . $id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST["menu-id"];
        $name = $_POST["menu-name"];
        $url = $_POST["menu-url"];

        $update_sql = "UPDATE `menu` SET `name`='$name',`url` = '$url' WHERE `id` = '$id' ;";



        $conn->query($update_sql);
        header('Location:' . 'menu_view.php');
    }
    ?>
    <h1>Sửa</h1>

    <form method="POST" action="menu_edit.php">
        <span>Name</span>
        <br>
        <input type="text" name="menu-name" value="<?php echo $row["name"] ?>" />
        <br>
        <span>URL</span>
        <br>
        <input type="text" name="menu-url" value="<?php echo $row["url"] ?>" />
        <br>
        <input type="hidden" name="menu-id" value="<?php echo $row["id"]?>"/>
        <button type="submit">Sửa</button>
    </form>
</body>

</html>