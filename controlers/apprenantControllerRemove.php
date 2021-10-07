<?php
include 'models/ApprenantModel.php';

$aApprenants = array(
    0 => new Apprenant('Louis', 'devalmont', 1991),
    1 => new Apprenant('Aurelien', 'Prugnaud', 1992),
    2 => new Apprenant('Doryan', 'Prête', 1993),
    3 => new Apprenant('Francois', 'Chastel', 1995),
);
$removePHP = $aApprenants[$_GET['index']];
$removePHP->removeFromList($aApprenants, $_GET['index']);

include 'views/apprenantView.php';
