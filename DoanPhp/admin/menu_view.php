<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/menu.css" />
    <title>Document</title>
</head>

<body>
    <h1>Chào Mừng Đến Với Trang Quản Lý Menu</h1>
    <p>
        <?php
        include ("../comon/db_connect.php");
        $sql = "SELECT * FROM `menu`;";
        $result = $conn->query($sql);
        ?>
        <input type="button" id="add-new-button" value="Thêm" onclick="location.href = 'menu_add.php';" />
    <table border="1" class="full-menu">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>URL</th>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) { 
            ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["url"]?></td>
                <td>
                    <button type="button" onclick="location.href = 'menu_edit.php?id=<?php echo $row['id'] ?>';">Sửa</button>
                    <button type="button" onclick="location.href = 'menu_delete.php?id=<?php echo $row['id'] ?>';">Xóa</button>
                </td>
            </tr>
            <?php
                }
            }
            ?> 


        </tbody>

    </table>
    </p>
</body>

</html>