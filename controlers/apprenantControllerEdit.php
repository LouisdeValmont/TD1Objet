<?php
include 'models/ApprenantModel.php';

$aApprenants = array(
    0 => new Apprenant('Louis', 'devalmont', 1991),
    1 => new Apprenant('Aurelien', 'Prugnaud', 1992),
    2 => new Apprenant('Doryan', 'Prête', 1993),
    3 => new Apprenant('Francois', 'Chastel', 1995),
);

if(isset($_POST) AND !empty($_POST['valider']) AND isset($_REQUEST['index']) AND $_REQUEST['index']>=0):
$oSubject = $aApprenants[$_REQUEST['index']];
$oSubject->updatelistByIndex($aApprenants, $_REQUEST['index'], $_POST['name'],$_POST['surname'],$_POST['dateOfBirth']);
    var_dump($_POST);
endif;

if(isset($_REQUEST['index']) AND $_REQUEST['index']>=0):
$oApprenant = $aApprenants[$_REQUEST['index']];
$oApprenant->getListSubjectById($aApprenants, $_REQUEST['index']);
    var_dump($oApprenant);
endif;


include 'views/apprenantViewEdit.php';
