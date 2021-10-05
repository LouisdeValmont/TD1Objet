<?php
include 'models/ApprenantModel.php';

$oApprenant1 = new Apprenant('louis','devalmont',1991);
echo $oApprenant1->getName();
echo $oApprenant1->getSurname();
echo $oApprenant1->getBirthDate();


//$oApprenants = new Apprenant();
//$aApprenants = $oApprenants -> getListApprenant();
die("");
include 'views/apprenantView.php';





