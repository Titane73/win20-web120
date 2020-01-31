<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Ti's WEB120 Portal Page";
        $logo = 'fas fa-home';
        $PageID = 'Welcome';
        $logo_color = 'style ="color:#226666';
    break;

    case 'big/index.php':
        $title = "Ti: BIG Project";
        $logo = 'fas fa-pen-square';
        $PageID = 'BIG Project';
    break;
    
    case 'aia.php':
        $title = "Ti: AIA";
        // $logo = 'fas fa-pen-square';
        $PageID = 'AIA (Audience, Issues, and Approach)';
        // $logo_color = 'style ="color:#615192';
    break;

    case 'flowchart.php':
        $title = "Ti: Flowchart";
        // $logo = 'fas fa-pen-square';
        $PageID = 'Final Project Flowchart &amp; Layouts';
    break;

    case 'fp/index.php':
        $title = "Ti's WEB120 Contact Page";
        // $logo = 'fas fa-pen-square';
        $PageID = 'Final Project';
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
        $PageID = 'Welcome';
        // $logo_color = 'style ="color:#226666';
   }

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Home";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.html'] = "Final Project";
    $nav1['contact.php'] = "Contact Ti";
    

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>


