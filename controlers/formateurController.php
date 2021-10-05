<?php

include 'models/FormateurModel.php';

$oFormateur1 = new Formateur('Cindy','Poincon','grpoPHP');
echo $oFormateur1->getName();
echo $oFormateur1->getSurname();
echo $oFormateur1->getEntreprise();
//$oFormateur = new Formateur();
//$aFormateurs = $oFormateur->getListFormateur();
die("");
include 'views/formateurView.php';
?>
