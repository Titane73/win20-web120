<?php

/* ************************************

php-config.php

WEB120/FP configuration information

************************************ */

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set("America/Los_Angeles");

//echo basename($_SERVER["PHP_SELF"]);

define("THIS_PAGE",basename($_SERVER["PHP_SELF"]));

switch(THIS_PAGE){

    case "index.php":
        $title = "Destination Weird";
        $PageID = "Destination Weird";
    break;
        
    case "home.php":
        $title = "Destination Weird Home";
        $PageID = "Home";
    break;

    case "about.php":
        $title = "About Destination Weird";
        $PageID = "All About Weird";
    break;
        
    case "galleries.php":
        $title = "Destination Weird Galleries";
        $PageID = "Destination Weird Galleries";
    break;
        
    case "film.php":
        $title = "Film Collection";
        $PageID = "Film Collection";
    break;
        
    case "stage.php":
        $title = "Stage Gallery";
        $PageID = "Stage Gallery";
    break;
        
    case "beyond.php":
        $title = "Crew Journal";
        $PageID = "Crew Journal";
    break;

    case "projects.php":
        $title = "Project Calendar";
        $PageID = "Project Calendar";
    break;
        
    case "members.php":
        $title = "Member's Vault";
        $PageID = "Member's Vault";
    break;
        
    case "disclaimer.php":
        $title = "Disclaimer";
        $PageID = "Disclaimer";
    break;
        
    case "contact.php":
        $title = "Contact Page";
        $PageID = "Contact Us";
    break;

    default:
        $title = THIS_PAGE;
        $PageID = "Destination Weird";
   }



?>
