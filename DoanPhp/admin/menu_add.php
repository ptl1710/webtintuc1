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
      $name = $_POST["menu-name"];
      $url = $_POST["menu-url"];

      $sql = "INSERT INTO `menu`(`name`,`url`) VALUES ('$name','$url');";

      
      include ("../comon/db_connect.php");
      $conn -> query($sql);
      header('Location:'.'menu_view.php');
    }
    ?>
    <h1>Thêm</h1>

    <form method="POST" action="menu_add.php">
        <span>Name</span>
        <br>
        <input type="text" name="menu-name" />
        <br>
        <span>URL</span>
        <br>
        <input type="text" name="menu-url" />
        <br>
        <button type="submit">Thêm</button>
    </form>
</body>

</html>