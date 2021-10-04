<?php
//Action = parametre créé pour recuperer les pages a afficher
if(!empty($_GET["action"]) AND $_GET["action"]=="subjectView"):
    include 'controlers/subjectController.php';
endif;
