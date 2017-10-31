<?php

class jeu
{
    private  $datedebut;
    private  $datefin;
    /**
     * @return the $datedebut
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @return the $datefin
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param field_type $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @param field_type $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    
    
}

