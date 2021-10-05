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
     * methode getSurname, get the surname of the student
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
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
     * methode getListApprenant :display all apprenant list
     * @return array[]
     */
    public function getListApprenant(){
        $aApprenants = array(
            array(  'nom' => 'Prugnaud',
                'prenom' => 'Aurélien',
                'dateNaissance' => 1995,
            ),
            array(  'nom' => 'Prête',
                'prenom' => 'Doryan',
                'dateNaissance' => 1979,
            ),
            array(  'nom' => 'Chastel',
                'prenom' => 'François',
                'dateNaissance' => 1979,
            ),
            array(  'nom' => 'Lahondès',
                'prenom' => 'Nicolas',
                'dateNaissance' => 1998,
            ),
            array(  'nom' => 'Poigt',
                'prenom' => 'Valentin',
                'dateNaissance' => 1993,
            )
        );
        return $aApprenants;
    }

}



