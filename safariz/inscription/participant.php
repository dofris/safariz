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

    public function __construct(array $participant) {
        if (count($participant)) {
            $this->hydrate($participant);
        }
    }

    public function hydrate(array $participant) {
        foreach ($participant as $key => $value) {
            $method = 'set_' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // GETTER
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

    // SETTER
    public function set_id($_id) {
        $this->_id = $_id;
    }

    public function set_nom($_nom) {
        $this->_nom = $_nom;
    }

    public function set_prenom($_prenom) {
        $this->_prenom = $_prenom;
    }

    public function set_telephone($_telephone) {
        $this->_telephone = $_telephone;
    }

    public function set_adresse($_adresse) {
        $this->_adresse = $_adresse;
    }

    public function set_cp($_cp) {
        $this->_cp = $_cp;
    }

    public function set_ville($_ville) {
        $this->_ville = $_ville;
    }

    public function set_email($_email) {
        $this->_email = $_email;
    }

    //verifier email est nouveau
    public function isNew() {
        return empty($this->_email);
    }

    //verifier la validite des champs
    public function isValid() {
        return !(empty($this->_nom) || empty($this->_prenom) || empty($this->_adresse) || empty($this->_cp) || empty($this->_ville) || empty($this->_email));
    }

}
