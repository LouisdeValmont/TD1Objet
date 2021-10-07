<?php

include 'models/FormateurModel.php';

$aFormateurs = array(
0 => new Formateur('Cindy','Poincon','grpoPHP'),
1 => new Formateur('Greg','Grorory','Javascriptnoob'),
2 => new Formateur('Thomas','Chevalier','fakeWordpress'),
);

$oFormateurBatiste = new Formateur('Batiste','Caplin','batTopCode');
$oFormateurBatiste->addToFormateur($aFormateurs);

$removePHP = $aFormateurs[0];
$removePHP->removeFromList($aFormateurs, 0);

//get Cindy's methode
//$aFormateurs[1]->updatelist($aFormateurs,'lol','','');
//$aFormateurs[3]->updateName($aFormateurs,'angular');

//$oFormateur = new Formateur();
//$aFormateurs = $oFormateur->getListFormateur();

include 'views/formateurView.php';
?>
