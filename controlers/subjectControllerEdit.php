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


//get maricel's methode
//$aSubjects[$_GET['index']]->updateSubject('duration', 10);

if(!empty($_POST) AND !empty($_POST['valider']) AND isset($_POST['index']) AND $_POST['index']>=0):
    $oSubject = $aSubjects[$_REQUEST['index']];
    $oSubject->updatelistByIndex($aSubjects, $_POST['index'], $_POST['name'], $_POST['duration'], $_POST['description']);
    var_dump($_POST);
endif;

if (isset($_REQUEST['index']) and $_REQUEST['index'] >= 0):

    $oSubject = $aSubjects[$_REQUEST['index']];
    $oSubject->getListSubjectById($aSubjects, $_REQUEST['index']);
    var_dump($oSubject);
endif;




require 'views/subjectViewEditer.php';




