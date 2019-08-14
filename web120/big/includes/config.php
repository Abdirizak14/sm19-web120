<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "web Dev Examples by Abdirizak";
        $logo = 'fa-home';
        $PageID = 'Client questionnaire';
    break;
    
    case 'flexbox':
        $title = 'flexbox research';
        $logo = 'fa-pencil-square-o';
        $PageID = 'flexbox research';
    break;
        case 'galleries.php':
        $title = 'galleries research';
        $logo = 'fa-pencil-square-o';
        $PageID = 'galleries research';
    break;
         case 'calendar.php':
        $title = 'google calendar';
        $logo = 'fa-pencil-square-o';
        $PageID = 'google calendar';
    break;
        break;
         case 'map.php':
        $title = 'google map';
        $logo = 'fa-pencil-square-o';
        $PageID = 'google map';
        break;
        break;
         case 'youtube.php':
        $title = 'google youtube videos';
        $logo = 'fa-pencil-square-o';
        $PageID = 'google youtube videos';
        break;
        break;
         case 'shoppingcarts.php':
        $title = 'shoppingcarts research';
        $logo = 'fa-pencil-square-o';
        $PageID = 'shoppingcarts research';
        break;
         case 'siteapp.php':
        $title = 'responsive website v.s. mobile app research';
        $logo = 'fa-pencil-square-o';
        $PageID = 'responsive website v.s. mobile app research';
        break;
         case 'webcam.php':
        $title = 'live webcam cameras';
        $logo = 'fa-pencil-square-o';
        $PageID = 'live webcam cameras';
        break;
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'welcome';
   }



?>







