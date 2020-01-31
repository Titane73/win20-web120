<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://kit.fontawesome.com/cd34044565.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/forms.css" />
    <link rel="stylesheet" href="css/tables.css" />
</head>

<body>

    <main class="wrapper">

        <header>
            <h1 id="page_head"><a href="index.php"><i class="logo <?=$logo?>"></i>Ti Hall: WEB120 Portal Website</a></h1>
            <nav >
                <ul class="topnav" id="myTopnav">
                    <?=makeLinks($nav1)?>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>

        <div>
            <h2 class="pageID"><?=$PageID?></h2>
        </div>

        <!-- start header.php   -->
