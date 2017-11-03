<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagerParticipant
 *
 * @author PC300
 */
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
    public function ajouP(Participant $part){
        $add = $this->dbname->prepare("INSERT INTO `participant`(`NOM`, `PRENOM`, `TELEPHONE`, `ADRESSE`, `CODEPOSTAL`, `VILLE`, `EMAIL`) "
                . "VALUES ( :nom, :pnom, :tel, :adr, :codep, :ville, :email)");
        $add->bindvalue(':nom', $part->get_nom());
        $add->bindvalue(':pnom', $part->get_pnom());
        $add->bindvalue(':tel', $part->get_telephone());
        $add->bindvalue(':email', $part->get_email());
        $add->bindvalue(':adr', $part->get_adresse());
        $add->bindvalue(':codep', $part->get_cp());
        $add->bindvalue(':ville', $part->get_ville());
        $add->execute();
    } 
    
    //page9
}
