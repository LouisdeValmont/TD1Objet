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
     * methode getSurname, get the surname of the teacher
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
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
     * methode getListFormateur :display all Formateur list
     * @return array[]
     */
    public function getListFormateur()
    {
        $aFormateurs = array(
            array('prenom' => 'Pierre',
                'nom' => 'Pezet',
                'societe' => 'Gaïdo'),
            array('prenom' => 'Aurélie',
                'nom' => 'Mesclier-Fournier',
                'societe' => 'English teacher'),
            array('prenom' => 'Cindy',
                'nom' => 'Poncin',
                'societe' => 'Kyū Solution')
        );
        return $aFormateurs;
    }
}

