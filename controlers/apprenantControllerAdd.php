<?php
include 'models/ApprenantModel.php';

$aApprenants = array(
    0 => new Apprenant('Louis', 'devalmont', 1991),
    1 => new Apprenant('Aurelien', 'Prugnaud', 1992),
    2 => new Apprenant('Doryan', 'Prête', 1993),
    3 => new Apprenant('Francois', 'Chastel', 1995),
);

if(!empty($_POST) AND !empty($_POST['valider'])):
    $oApprenant = new Apprenant($_POST['name'], $_POST['surname'], $_POST['birthDate']);
    $oApprenant->addToApprenant($aApprenants);
    var_dump($aApprenants);
endif;


include 'views/apprenantViewAdd.php';
