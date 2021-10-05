<?php
include 'models/PromoModel.php';

$oPromo = new Promotion('cda2457','2020','2021',15);
echo $oPromo->getName();
echo $oPromo->getStart();
echo $oPromo->getEnd();
echo $oPromo->getNumbreOfStudent();
//$oPromo = new Promotion();
//$aPromos = $oPromo->getListPromotions();
die("");
include 'views/promoView.php';
?>
