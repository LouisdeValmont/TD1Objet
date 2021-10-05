<?php

include 'models/FormateurModel.php';

$oFormateur = new Formateur();
$aFormateurs = $oFormateur->getListFormateur();

include 'views/formateurView.php';
?>
