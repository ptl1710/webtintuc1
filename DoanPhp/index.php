<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/stylesheet.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


</head>

<body>

    <?php

    include ("comon/db_connect.php");
    $sql = "SELECT * FROM `menu`;";
    $post ="SELECT * FROM `post`";
    $result = $conn->query($sql);
    $result1 = $conn->query($post);
    
    ?>


    <nav class="navbar navbar-inverse ">
        <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Trang chủ</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <li class="" style="font-weight: bold; text-decoration: underline;">
                            <a href="<?php echo $row["url"] ?>"><?php echo $row["name"] ?> <span
                                    class="sr-only">(current)</span>
                            </a>
                        </li>

                        <?php

                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div id="main-carousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel" data-slide-to="1"></li>
                    <li data-target="#main-carousel" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/la.jpg" alt="Los Angeles" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="images/chicago.jpg" alt="Chicago" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="images/ny.jpg" alt="New york" style="width:50%;">
                    </div>
                </div>


                <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#main-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-8">

                <h1 class="news-type">Tin Mới Nhất</h1>
                <?php

                        if ($result1->num_rows > 0) {

                            while ($row1 = $result1->fetch_assoc()) {?>
                <h1><?php echo $row1["title"]?></h1>
                <br>
                <span><?php echo $row1["decription"]?></span>

                <?php
                            }
                        }
                        ?>
            </div>


            <div class="col-md-4">

                <!-- 
                <div class="well">
                    <h4>Tìm Kiếm</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>

                </div> -->

                <!-- <div class="well">
                    <h4>Chủ Đề</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="http://www.google.com">menu 1</a></li>
                                <li><a href="http://www.google.com">menu 1</a></li>
                                <li><a href="http://www.google.com">menu 1</a></li>
                                <li><a href="http://www.google.com">menu 1</a></li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="http://www.google.com">menu 1</a></li>
                                <li><a href="http://www.google.com">menu 1</a></li>


                            </ul>
                        </div>
                    </div>

                </div> -->

            </div>
        </div>



        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> &copy;Nhóm 1</p>
                </div>
            </div>

        </footer>

    </div>

</body>

</html>