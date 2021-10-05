<?php

class Subject{
    public $name;
    public $duration;
    public $description;

    /**
     * methode getListSubject :display all subjects list
     * @return array[]
     */
    public function getListSubject(){
        $aSubjects = array(
            array('nom' => 'Algorithmique',
                'duree' => 60,
                'description' => 'la base pour programmer'),
            array('nom' => 'Anglais',
                'duree' => 30,
                'description' => 'l\'indispensable'),
            array('nom' => 'Angular',
                'duree' => 60,
                'description' => 'top')
        );
        return $aSubjects;

    }
}

