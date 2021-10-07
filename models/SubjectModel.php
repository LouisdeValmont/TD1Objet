<?php

class Subject{
    private $name;
    private $duration;
    private $description;

    /**
     * @param $name
     * @param $duration
     * @param $description
     */
    public function __construct($name='',$duration='',$description=''){
        $this->name = $name;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * add an object to a list
     * @param array
     */
    // & -> go modify the variable in the controller
    public function addToList(&$aSubject){
        array_push($aSubject, $this);
        // this is the reference to the current object
    }

    /**
     * remove object from the subject list
     * @param array
     * @param int
     */
    public function removeFromList(&$aSubject, $index){
        unset($aSubject[$index]);
    }

    /**
     * edit the object
     * @param mixed
     * @param mixed
     */
    //methode de maricel
    public function updateSubject($key, $newValue)
    {
        $this->$key = $newValue;
    }

    /**
     * edit all the object in the Subject list
     * @param array
     * @param string $name
     * @param string $duration
     * @param string $description
     */
    //methode Cindy
    public function updatelist(&$aSubject, $name='', $duration='', $description='')
    {
        $index = array_search($this, $aSubject);
        if (!empty($name)):
            $aSubject[$index]->name = $name;
        endif;
        if (!empty($duration)):
            $aSubject[$index]->duration = $duration;
        endif;
        if (!empty($description)):
            $aSubject[$index]->description = $description;
        endif;
        }

    /**
     * methode updatelistByIndex
     * @param array $aSubject
     * @param int $index
     * @param string $name
     * @param string $duration
     * @param string $description
     */
    public function updatelistByIndex(&$aSubject, $index, $name='', $duration='', $description='')
    {
        if (!empty($name)):
            $aSubject[$index]->name = $name;
        endif;
        if (!empty($duration)):
            $aSubject[$index]->duration = $duration;
        endif;
        if (!empty($description)):
            $aSubject[$index]->description = $description;
        endif;
    }

    /**
     * edit the name of the object in the list
     * @param array $aSubject
     * @param string $name
     */
    public function updateName(&$aSubject, $name='')
    {
        $index = array_search($this, $aSubject);
        if (!empty($name)):
            $aSubject[$index]->name = $name;
        endif;
    }
    /**
     * edit the duration of the object in the list
     * @param array $aSubject
     * @param string $duration
     */
    public function updateDuration(&$aSubject, $duration='')
    {
        $index = array_search($this, $aSubject);
        if (!empty($duration)):
            $aSubject[$index]->duration = $duration;
        endif;
    }
    /**
     * edit the description of the object in the list
     * @param array $aSubject
     * @param string $description
     */
    public function updateDescription(&$aSubject, $description='')
    {
        $index = array_search($this, $aSubject);
        if (!empty($description)):
            $aSubject[$index]->description = $description;
        endif;
    }


    /**
     * display the list of objects
     * @param array $aSubject
     * @return mixed
     */
        public function getListSubject($aSubject){
        return $aSubject;
        }

    /**
     * Method getListSubjectByIndex
     * @param array $aSubject
     * @param int $index
     * @return mixed
     */
        public function getListSubjectById($aSubject, $index){
            return $aSubject[$index];
        }
}

