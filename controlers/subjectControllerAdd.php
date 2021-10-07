<?php

require 'models/SubjectModel.php';

//get will create a new object
//set will change the content of a property value
// put 'PHP' or 0 as the index , isn't really important
$aSubjects = array(
    0 => new Subject('PHP', '128', 'top'),
    1 => new Subject('HTML', '228', 'it is okay'),
    2 => new Subject('CSS', '428', 'mouai'),
    3 => new Subject('ANGULAR', '28', 'pas top'),
);

if(!empty($_POST) AND !empty($_POST['valider'])):
$oSubject = new Subject($_POST['name'], $_POST['duration'], $_POST['description']);
$oSubject->addToList($aSubjects);
var_dump($aSubjects);
endif;

require 'views/subjectViewAdd.php';
