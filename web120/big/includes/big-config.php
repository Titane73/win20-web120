<?php

/* ************************************

big-config.php

WEB120/BIG configuration information

************************************ */

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Ti Hall: Exploring Web Concepts";
        $logo = 'fas fa-home';
        $PageID = 'Greetings &amp; Salutations';
        $logo_color = 'style ="color:#226666';
    break;

    case '../index.php':
        $title = "Portal";
        $logo = 'fas fa-university';
        $PageID = 'BIG Project';
    break;
    
    case 'galleries.php':
        $title = "Power of Images";
        $logo = 'fas fa-image';
        $PageID = 'BIG Project: Power of Images';
        // $logo_color = 'style ="color:#615192';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Micro History";
        $logo = 'fas fa-history';
        $PageID = 'BIG Project: Flexbox Micro History';
        // $logo_color = 'style ="color:#615192';
    break;
        
    case 'shopcarts.php':
        $title = "Shopping the UX";
        $logo = 'fas fa-shopping-cart';
        $PageID = 'BIG Project: Shopping the UX';
        // $logo_color = 'style ="color:#615192';
    break;
        
    case 'resp_mob.php':
        $title = "Responsive? Mobile?";
        $logo = 'fas fa-mobile-alt';
        $PageID = 'BIG Project: Responsive? Mobile?';
        // $logo_color = 'style ="color:#615192';
    break;

    case 'calendar.php':
        $title = "Google: Calendar";
         $logo = 'fas fa-calendar-alt';
        $PageID = 'Google Calendar';
    break;
        
    case 'map.php':
        $title = "Google: Maps";
         $logo = 'fas fa-map-marked-alt';
        $PageID = 'Google Maps';
    break;
        
    case 'youtube.php':
        $title = "Google: Youtube";
         $logo = 'fab fa-youtube';
        $PageID = 'YouTube';
    break;
                
    case 'webcam.php':
        $title = "Live Stream Webcams";
         $logo = 'fas fa-video';
        $PageID = 'Live Stream Webcams';
    break;

    case 'contact.php':
        $title = "Ti: Contact Page";
        $logo = 'fas fa-pen-square';
        $PageID = 'Contact Ti';
        // $logo_color = 'style ="color:#403075';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fas fa-home';
        $PageID = 'BIG Home';
        // $logo_color = 'style ="color:#226666';
   }



?>
