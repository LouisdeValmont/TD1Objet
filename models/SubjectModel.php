<?php

class Subject{
    private $name;
    private $duration;
    private $description;

    public function __construct($nameParm,$duration,$description){
        $this->name = $nameParm;
        $this->duration = $duration;
        $this->description = $description;
    }

    /**
     * methode getName, get the name of the subject
     *
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     *  methode getDuration, get the duration in a years of the subject
     *
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * methode getDescription, get the description of the subject
     *
     * @return mixed
     */
    public function getDescription(){
        return $this->description;
    }

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

