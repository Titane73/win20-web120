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
</head>
<main class="wrapper">
<body>
    <header>
        <h1><a href="index.php"><i class="logo <?=$logo?>"></i>Ti Hall: WEB120 Portal Website</a></h1>
        <nav class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>  
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
    </header>
    
    <section>
        <h2 class="pageID"><?=$PageID?></h2>
  
    <!-- start header.php   -->
