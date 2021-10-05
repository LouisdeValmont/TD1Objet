<?php

class Apprenant
{

    //i declare the property
    public $name;
    public $surname;
    public $birthDate;

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



