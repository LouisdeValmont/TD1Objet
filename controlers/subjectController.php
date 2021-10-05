<?php

require 'models/SubjectModel.php';

$oSubjectPhp = new Subject('PHP','128','top');
echo $oSubjectPhp->getName();
echo $oSubjectPhp->getDuration();
echo $oSubjectPhp->getDescription();
die("");

//$oSubjects = new Subject();
//$aSubjects = $oSubjects->getListSubject();

require 'views/subjectView.php';

