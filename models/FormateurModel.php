<?php

class Formateur
{
    public $name;
    public $surname;
    public $entreprise;

    /**
     * @param $name
     * @param $surname
     * @param $entreprise
     */
    public function __construct($name, $surname, $entreprise)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->entreprise = $entreprise;
    }

    /**
     * methode getName, get the name of the teacher
     *
     * @return mixed
     */
    public function getName()
    {
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
     * methode getSurname, get the surname of the teacher
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * methode getEntreprise, get the entreprise of the teacher
     *
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * add object to Formateur
     * @param $aFormateur
     */
    public function addToFormateur(&$aFormateur){
        array_push($aFormateur,$this);
    }

    /**
     * remove object from the subject list
     * @param array
     * @param int
     */
    public function removeFromList(&$aFormateur, $index){
        unset($aFormateur[$index]);
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
     * @param string $surname
     * @param string $entreprise
     */
    //methode Cindy
    public function updatelist(&$aFormateur, $name='', $surname='', $entreprise='')
    {
        $index = array_search($this, $aFormateur);
        if (!empty($name)):
            $aFormateur[$index]->name = $name;
        endif;
        if (!empty($surname)):
            $aFormateur[$index]->surname = $surname;
        endif;
        if (!empty($entreprise)):
            $aFormateur[$index]->entreprise = $entreprise;
        endif;
    }

    /**
     * edit the name of the object in the list
     * @param array $aFormateur
     * @param string $name
     */
    public function updateName(&$aFormateur, $name='')
    {
        $index = array_search($this, $aFormateur);
        if (!empty($name)):
            $aFormateur[$index]->name = $name;
        endif;
    }
    /**
     * edit the surname of the object in the list
     * @param array $aFormateur
     * @param string $surname
     */
    public function updatesurname(&$aFormateur, $surname='')
    {
        $index = array_search($this, $aFormateur);
        if (!empty($surname)):
            $aFormateur[$index]->surname = $surname;
        endif;
    }
    /**
     * edit the entreprise of the object in the list
     * @param array $aFormateur
     * @param string $entreprise
     */
    public function updateEntreprise(&$aFormateur, $entreprise='')
    {
        $index = array_search($this, $aFormateur);
        if (!empty($entreprise)):
            $aFormateur[$index]->entreprise = $entreprise;
        endif;
    }


    /**
     * display the list of object
     * @param array $aFormateur
     * @return mixed
     */
    public function getListSubject($aFormateur){
        return $aFormateur;
    }
}

