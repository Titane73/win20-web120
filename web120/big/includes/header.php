<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />

    <script src="https://kit.fontawesome.com/cd34044565.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/nav.css" />


</head>

<body>

    <main class="wrapper">

        <header>
            <h1 id="page_head"><a href="index.php"><i class="logo <?=$logo?>"></i>Ti Hall: Web Concepts Exploration</a></h1>

            <nav class="topnav" id="myTopnav">
                <a href="index.php" class="active">Home</a>

                <div class="dropdown">
                    <button class="dropbtn">Research
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="galleries.php">Power of Images</a>
                        <a href="flexbox.php">Flexbox Micro History</a>
                        <a href="shopcarts.php">Shopping the UX</a>
                        <a href="resp_mob.php">Responsive? Mobile?</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Google
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="calendar.php">Calendar</a>
                        <a href="map.php">Maps</a>
                        <a href="youtube.php">YouTube</a>
                    </div>
                </div>
                <a href="webcam.php">Webcams</a>
                <a href="contact.php">Contact</a>
                <a href="../index.php">Portal</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </nav>
        </header>

        <div>
            <h2 class="pageID"><?=$PageID?></h2>
        </div>

        <!-- End header.php -->
