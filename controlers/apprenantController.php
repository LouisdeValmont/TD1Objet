<?php
include 'models/ApprenantModel.php';

$oApprenants = new Apprenant();
$aApprenants = $oApprenants -> getListApprenant();

include 'views/apprenantView.php';





