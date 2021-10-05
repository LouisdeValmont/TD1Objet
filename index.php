<?php
////Action = parametre créé pour recuperer les pages a afficher
////$_GET["action"]=="subjectView" can be whatever name you want
////if(!empty($_GET["action"]) AND $_GET["action"]=="subjectView"):
////    include 'controlers/subjectController.php';
////endif;
////
////if(!empty($_GET["action"]) AND $_GET["action"]=="formateurView"):
////    include 'controlers/formateurController.php';
////endif;
////
////if(!empty($_GET["action"]) AND $_GET["action"]=="promoView"):
////    include 'controlers/promoController.php';
////endif;
////
////if(!empty($_GET["action"]) AND $_GET["action"]=="apprenantView"):
////    include 'controlers/apprenantController.php';
////endif;
//
////equilavent
//
//
if(!empty($_GET["action"])):
switch ($_GET["action"]):
    case "subjectView":
        include 'controlers/subjectController.php';
        break;
    case "formateurView":
        include 'controlers/formateurController.php';
        break;
    case "promoView":
        include 'controlers/promoController.php';
        break;
    case "apprenantView":
        include 'controlers/apprenantController.php';
        break;
    default:
        include 'services/page404.php';
endswitch;
endif;
