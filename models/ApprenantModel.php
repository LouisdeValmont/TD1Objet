<?php

class Apprenant
{

    //i declare the property
    public $name;
    public $surname;
    public $birthDate;

    /**
     * @param $name
     * @param $surname
     * @param $birthDate
     */
    public function __construct($name, $surname, $birthDate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthDate = $birthDate;
    }

    /**
     * methode getName, get the name of the student
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
     * methode getSurname, get the surname of the student
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
     * methode getBirthDate, get the BirthDate of the student
     *
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * add to apprenant
     * @param array
     */
    public function addToApprenant(&$aApprenant){
        array_push($aApprenant, $this);
    }

    /**
     * remove object from the subject list
     * @param array
     * @param int
     */
    public function removeFromList(&$aApprenant, $index){
        unset($aApprenant[$index]);
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
     * @param string $birthDate
     */
    //methode Cindy
    public function updatelist(&$aApprenant, $name='', $surname='', $birthDate='')
    {
        $index = array_search($this, $aApprenant);
        if (!empty($name)):
            $aApprenant[$index]->name = $name;
        endif;
        if (!empty($surname)):
            $aApprenant[$index]->surname = $surname;
        endif;
        if (!empty($birthDate)):
            $aApprenant[$index]->birthDate = $birthDate;
        endif;
    }

    /**
     * methode updatelistByIndex
     * @param array $aApprenant
     * @param int $index
     * @param string $name
     * @param string $surname
     * @param int $dateOfBirth
     */
    public function updatelistByIndex(&$aApprenant, $index, $name='', $surname='', $dateOfBirth='')
    {
        if (!empty($name)):
            $aApprenant[$index]->name = $name;
        endif;
        if (!empty($surname)):
            $aApprenant[$index]->surname = $surname;
        endif;
        if (!empty($dateOfBirth)):
            $aApprenant[$index]->dateOfBirth = $dateOfBirth;
        endif;
    }

    /**
     * edit the name of the object in the list
     * @param array $aApprenant
     * @param string $name
     */
    public function updateName(&$aApprenant, $name='')
    {
        $index = array_search($this, $aApprenant);
        if (!empty($name)):
            $aApprenant[$index]->name = $name;
        endif;
    }
    /**
     * edit the surname of the object in the list
     * @param array $aApprenant
     * @param string $surname
     */
    public function updateDuration(&$aApprenant, $surname='')
    {
        $index = array_search($this, $aApprenant);
        if (!empty($surname)):
            $aApprenant[$index]->surname = $surname;
        endif;
    }
    /**
     * edit the birthDate of the object in the list
     * @param array $aApprenant
     * @param string $birthDate
     */
    public function updateDescription(&$aApprenant, $birthDate='')
    {
        $index = array_search($this, $aApprenant);
        if (!empty($birthDate)):
            $aApprenant[$index]->birthDate = $birthDate;
        endif;
    }


    /**
     * display the list of object
     * @param array $aApprenant
     * @return mixed
     */
    public function getListSubject($aApprenant){
        return $aApprenant;
    }

    /**
     * Method getListSubjectByIndex
     * @param array $aApprenant
     * @param int $index
     * @return mixed
     */
    public function getListSubjectById($aApprenant, $index){
        return $aApprenant[$index];
    }
}



