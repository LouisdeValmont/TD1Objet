<?php
session_start();
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



//$oSubjectJS = new Subject('JS','200','okayyyyy');
//$oSubjectJS->addToList($aSubjects);


//$removePHP = $aSubjects[0];
//$removePHP->removeFromList($aSubjects, 0);

//get Cindy's methode
//$aSubjects[1]->updatelist($aSubjects,'lol','','');
//$aSubjects[3]->updateName($aSubjects,'angular');

//get maricel's methode
//$aSubjects[1]->updateSubject('description', 10);


require 'views/subjectView.php';

