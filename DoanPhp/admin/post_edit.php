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
        $sql = "SELECT * FROM `post` WHERE post_id=" . $id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST["menu-id"];
        $title = $_POST["post-title"];
        $decription = $_POST["post-decription"];
        $images =$_POST["post-images"];

        $update_sql = "UPDATE `post` SET `title`='$title',`decription` = '$decription' WHERE `post_id` = '$id' ;";



        $conn->query($update_sql);
        header('Location:' . 'post_view.php');
    }
    ?>
    <h1>Sửa Bài Viết</h1>

    <form action="post_edit.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="menu-id" value="<?php echo $row["post_id"]?>" />

        <span>Tiêu đề:</span><br>
        <input type="text" name="post-title" value="<?php echo $row["title"] ?>"><br>

        <span>Nội dung:</span><br>
        <textarea name="post-decription" id="content" rows="25" cols="120"> 
            <?php echo $row["decription"] ?>
        </textarea>
        <br>

        <span>Hình Ảnh:</span><br>
        <input name="post-images" type="file" value="<?php echo $row["images"] ?>"><br>

        <button type="submit">Sửa</button>
    </form>
</body>

</html>