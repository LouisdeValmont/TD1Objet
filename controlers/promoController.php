<?php
include 'models/PromoModel.php';

$aPromos = array(
    0 => new Promotion('cda2457', '2020', '2021', 15),
    1 => new Promotion('crapshow', '2018', '2019', 69),
    2 => new Promotion('phpenunans', '2021', '2022', 10),
    3 => new Promotion('webdevPourLesNuls', '2022', '2025', 14),
);

$oPromoHivers = new Promotion('Ensemble tout seul','2000','2002',1);
$oPromoHivers->addToPromo($aPromos);

$removePHP = $aPromos[0];
$removePHP->removeFromList($aPromos, 0);

//get Cindy's methode
//$aPromos[1]->updatelist($aPromos,'lol','','');
//$aPromos[3]->updateName($aPromos,'angular');

include 'views/promoView.php';
?>
