<?php

class Formateur
{
    public $name;
    public $surname;
    public $entreprise;

    /**
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

