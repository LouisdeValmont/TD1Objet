<?php

require 'models/SubjectModel.php';

$oSubjects = new Subject();
$aSubjects = $oSubjects->getListSubject();

require 'views/subjectView.php';

