<?php
include 'models/ApprenantModel.php';

$aApprenants = array(
    0 => new Apprenant('Louis', 'devalmont', 1991),
    1 => new Apprenant('Aurelien', 'Prugnaud', 1992),
    2 => new Apprenant('Doryan', 'Prête', 1993),
    3 => new Apprenant('Francois', 'Chastel', 1995),
);



//$oApprenantVictor = new Apprenant('Victor','vic',1991);
//$oApprenantVictor->addToApprenant($aApprenants);
//
//$removePHP = $aApprenants[0];
//$removePHP->removeFromList($aApprenants, 0);

//$aApprenants[1]->updatelist($aApprenants,'lol','','');
//$aApprenants[3]->updateName($aApprenants,'angular');


include 'views/apprenantView.php';





