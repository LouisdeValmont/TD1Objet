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
     * methode getName, get the name of the promotion
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
     * methode getStart, get when the promotion is starting
     *
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
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
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
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
     * @param mixed $numbreOfStudent
     */
    public function setNumbreOfStudent($numbreOfStudent)
    {
        $this->numbreOfStudent = $numbreOfStudent;
    }

    /**
     * add to promotion
     * @param array
     */
    public function addToPromo(&$aPromo){
        array_push($aPromo, $this);
    }

    /**
     * remove object from the subject list
     * @param array
     * @param int
     */
    public function removeFromList(&$aPromotion, $index){
        unset($aPromotion[$index]);
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
     * @param string $start
     * @param string $end
     * @param int $numbreOfStudent
     */
    //methode Cindy
    public function updatelist(&$aPromotion, $name='', $start='', $end='', $numbreOfStudent='')
    {
        $index = array_search($this, $aPromotion);
        if (!empty($name)):
            $aPromotion[$index]->name = $name;
        endif;
        if (!empty($start)):
            $aPromotion[$index]->start = $start;
        endif;
        if (!empty($end)):
            $aPromotion[$index]->end = $end;
        endif;        
        if (!empty($nbApprenant)):
            $aPromotion[$index]->nbApprenant = $nbApprenant;
        endif;
    }

    /**
     * edit the name of the object in the list
     * @param array $aPromotion
     * @param string $name
     */
    public function updateName(&$aPromotion, $name='')
    {
        $index = array_search($this, $aPromotion);
        if (!empty($name)):
            $aPromotion[$index]->name = $name;
        endif;
    }
    /**
     * edit the start of the object in the list
     * @param array $aPromotion
     * @param string $start
     */
    public function updateStart(&$aPromotion, $start='')
    {
        $index = array_search($this, $aPromotion);
        if (!empty($start)):
            $aPromotion[$index]->start = $start;
        endif;
    }
    /**
     * edit the end of the object in the list
     * @param array $aPromotion
     * @param string $end
     */
    public function updateEnd(&$aPromotion, $end='')
    {
        $index = array_search($this, $aPromotion);
        if (!empty($end)):
            $aPromotion[$index]->end = $end;
        endif;
    }

    /**
     * edit the end of the object in the list
     * @param array $aPromotion
     * @param string $end
     */
    public function updateNbApp(&$aPromotion, $apprenant='')
    {
        $index = array_search($this, $aPromotion);
        if (!empty($apprenant)):
            $aPromotion[$index]->apprenant = $apprenant;
        endif;
    }


    /**
     * display the list of object
     * @param array $aPromotion
     * @return mixed
     */
    public function getListSubject($aPromotion){
        return $aPromotion;
    }
}

