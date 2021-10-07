<?php

require 'models/SubjectModel.php';

//get will create a new object
//set will change the content of a property value
// put 'PHP' or 0 as the index , isn't really important
$aSubjects = array(
    0 => new Subject('PHP','128','top'),
    1 => new Subject('HTML','228','it is okay'),
    2 => new Subject('CSS','428','mouai'),
    3 => new Subject('ANGULAR','28','pas top'),
);


    $removePHP = $aSubjects[$_GET['index']];
    $removePHP->removeFromList($aSubjects, $_GET['index']);




require 'views/subjectView.php';




