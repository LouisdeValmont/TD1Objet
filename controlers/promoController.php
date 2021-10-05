<?php
include 'models/PromoModel.php';

$oPromo = new Promotion();
$aPromos = $oPromo->getListPromotions();

include 'views/promoView.php';
?>
