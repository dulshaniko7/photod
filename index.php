<?php
//require_once ("./classes/Employee.php");
//require_once ("./classes/db.php");
//include "./admin/includes/classes/init.php";



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/newstyle.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Photo-Gallery</title>
</head>
<body>
<div class="nav">
    <div class="nav-item">
        Photos
    </div>
    <div class="nav-item">
        Home
    </div>
    <div class="nav-item">
        About
    </div>
    <div class="nav-item">
        Contacts
    </div>
    <div class="nav-item">

        <a href="admin/index.php">Admin</a>
    </div>
</div>



<!--  sec part       -->
<div class="section2">
    <div class="container">


    </div>


    <div class="sidebar">
        <div class="card search">
                    <div class="front">
                <h3>Blog Search</h3>
                <input type="text" name="blog-search"><span><input type="submit" name="submit"></span>
                    </div>
            <div class="back">
                <h4>Hi</h4>
            </div>
        </div>

        <div class="card categories">
                <div class="front">
            <h3>Blog Categories</h3>
            <ul>
                <li>Category Name</li>
                <li>Category Name</li>
                <li>Category Name</li>
                <li>Category Name</li>
            </ul>

            <ul>
                <li>Category Name</li>
                <li>Category Name</li>
                <li>Category Name</li>
                <li>Category Name</li>
            </ul>
                </div>

                <div class="back">
                <h4>Hi</h4>
                </div>
        </div>
        <div class="card widget">
                <div class="front">
            <h3>Side Widget</h3>
        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur
          </p>
                </div>
            <div class="back">
                <h4>Hi</h4>
            </div>
        </div>
    </div>
</div>


<!--  third part       -->
<div class="section3">
    <h4>All right received</h4>
</div>
</body>
</html>


