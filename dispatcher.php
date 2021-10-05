<?php


    switch ($_SERVER['REQUEST_URI']):
        case '/subjectView':
            include 'controlers/subjectController.php';
            break;
        case '/formateurView':
            include 'controlers/formateurController.php';
            break;
        case '/promoView':
            include 'controlers/promoController.php';
            break;
        case '/apprenantView':
            include 'controlers/apprenantController.php';
            break;
        default:
            include 'services/page404.php';
    endswitch;

