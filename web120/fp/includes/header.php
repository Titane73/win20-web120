<?php include 'php-config.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/dest_weird.css" />
    <link rel="stylesheet" href="css/dest_weird_nav.css" />
    <script src="https://kit.fontawesome.com/cd34044565.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="logo flex-container">
        <a class="pageID" href="home.php">
            <h1 class="pageID"><?=$PageID?></h1>
        </a>

        <!-- Use any element to open/show the overlay navigation menu -->

        <span class="nav_button" onclick="openNav()">
            <i class="fas fa-bars">
                <h6 class="nav_button">Menu</h6>
            </i>
        </span>

    </div>

    <!-- The overlay -->
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
            <a href="home.php">Home</a>
            <a href="about.php">All About Weird</a>
            <a href="projects.php">Project Calendar</a>
            <a href="film.php">Film Collection</a>
            <a href="stage.php">Stage Gallery</a>
            <a href="beyond.php">Beyond the Scenes</a>
            <a href="members.php">Member's Vault</a>
            <a href="contact.php">Contact</a>
        </div>

    </div>



    <script>
        /* Open when someone clicks on the span element */
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        /* Close when someone clicks on the "x" symbol inside the overlay */
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

    </script>




    <!--   End header -->
