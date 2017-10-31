<?php

class Participant {

    private $_id;
    private $_nom;
    private $_prenom;
    private $_telephone;
    private $_adresse;
    private $_cp;
    private $_ville;
    private $_email;

    public function __construct($_id, $_nom, $_prenom, $_telephone, $_adresse, $_cp, $_ville, $_email) {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_telephone = $_telephone;
        $this->_adresse = $_adresse;
        $this->_cp = $_cp;
        $this->_ville = $_ville;
        $this->_email = $_email;
    }

    public function get_id() {
        return $this->_id;
    }

    public function get_nom() {
        return $this->_nom;
    }

    public function get_pnom() {
        return $this->_prenom;
    }

    public function get_telephone() {
        return $this->_telephone;
    }

    public function get_adresse() {
        return $this->_adresse;
    }

    public function get_cp() {
        return $this->_cp;
    }

    public function get_ville() {
        return $this->_ville;
    }

    public function get_email() {
        return $this->_email;
    }

     public function hydrate(array $participant) {
        foreach ($participant as $key => $value) {
            $method = 'set_' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
       
    
    //fonction qui verifier si l'utilisateur a déjà joue dans la journée
    public function jouer(){
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
