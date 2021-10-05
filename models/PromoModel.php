<?php

class Promotion{
    public $name;
    public $start;
    public $end;
    public $numbreOfStudent;

    /**
     * @param $name
     * @param $start
     * @param $end
     * @param $numbreOfStudent
     */
    public function __construct($name, $start, $end, $numbreOfStudent)
    {
        $this->name = $name;
        $this->start = $start;
        $this->end = $end;
        $this->numbreOfStudent = $numbreOfStudent;
    }

    /**
     * methode getName, get the name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * methode getStart, get when the promotion is starting
     *
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * methode getEnd, get when the promotion is ending
     *
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * methode geNumbreOfStudent, get how many student are attending the promotion this years
     *
     * @return mixed
     */
    public function getNumbreOfStudent()
    {
        return $this->numbreOfStudent;
    }

    /**
     * methode getListPromotions :display all promotion list
     * @return array[]
     */
    public function getListPromotions() {
        $aPromos = array(
            array('nom' => 'DWWM_R4_CF',
                'dateDebut' => '2021-03-01',
                'dateFin' => '2022-03-01',
                'nombreApprenant' => 16),
            array('nom' => 'DWWM_R2_FOAD',
                'dateDebut' => '2021-02-01',
                'dateFin' => '2021-09-01',
                'nombreApprenant' => 24),
            array('nom' => 'DWWM_PE1_CF',
                'dateDebut' => '2021-09-01',
                'dateFin' => '2022-03-01',
                'nombreApprenant' => 12),
            array('nom' => 'CDA_R19_VILL',
                'dateDebut' => '2021-03-01',
                'dateFin' => '2022-03-01',
                'nombreApprenant' => 24),
            array('nom' => 'CDA_R2_CF',
                'dateDebut' => '2021-06-01',
                'dateFin' => '2022-06-01',
                'nombreApprenant' => 12)
        );
        return $aPromos;
    }
}

