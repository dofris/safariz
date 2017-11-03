<?php

class ManagerParticipant {

    private $dbname;

    public function getDbname() {
        return $this->dbname;
    }

    public function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    public function __construct($dbname) {
        $this->dbname = $dbname;
    }

    //fonction qui enregistre un participant      
    public function ajouP(Participant $part) {
        $add = $this->dbname->prepare("INSERT INTO `participant`(`nom`, `pnom`, `tel`, `mail`, `address`, `cp`, `ville`) "
                . "VALUES ( :nom, :prenom, :tel, :email, :adresse, :cp, :ville)");
        $add->bindvalue(':nom', $part->get_nom());
        $add->bindvalue(':prenom', $part->get_pnom());
        $add->bindvalue(':tel', $part->get_telephone());
        $add->bindvalue(':adresse', $part->get_adresse());
        $add->bindvalue(':cp', $part->get_cp());
        $add->bindvalue(':ville', $part->get_ville());
        $add->bindvalue(':email', $part->get_email());
        $add->execute();
    }

    //supprime le participant si il est dèja enregistre
    public function delete($mail) {
        $this->dbname->exec('DELETE FROM participant WHERE email = ' . $mail);
    }

    //permettant de vérifier qu’un participant a bien rempli le formulaire (isValid()), et si il n'est pas déjà dans la base de donnée sinon le supprimer    
    public function save(Participant $aj) {
        if ($aj->isValid()) {
            if ($aj->isNew()) {
                $this->add(aj);
            } else {
                $this->delete($aj);
            }
        }
    }

}
