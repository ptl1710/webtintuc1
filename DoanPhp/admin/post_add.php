<?php

?>

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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $title = $_POST["post-title"];
      $decription = $_POST["post-decription"];
      $images =$_POST["post-images"];

      $sql = "INSERT INTO `post`( `title`, `decription`, `images`) 
      VALUES ('$title','$decription','$images')";

      
      include ("../comon/db_connect.php");
      $conn -> query($sql);
      header('Location:'.'post_view.php');
    }
    ?>
<form action="post_add.php" method="post" enctype="multipart/form-data">

<span>Tiêu đề:</span><br>
<input type="text" name="post-title" ><br>

<span>Nội dung:</span><br>
<textarea name="post-decription" id="content" rows="25" cols="120"></textarea>
<br>

<span>Hình Ảnh:</span><br>
<input name="post-images" type="file"><br>

<input type="submit" name="add_action" value="Thêm bài viết" class="btn btn-success">
</form>
                
    		</div>
            </div>      
        </div>
</body>
</html>

