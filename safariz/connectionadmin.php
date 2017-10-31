<?php

class connectionadmin
{
    
    
    private $username;
    private $mdp;
    
   function  __construct($user, $pd, BDD $bd){
       $this->mdp=$pd;
       $this->username=$user;
        
    }
    /**
     * @return the $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return the $mdp
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param field_type $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param field_type $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function identification($user, $mdp, $bd){
        $requete = $this->db->prepare('SELECT mdp FROM admin WHERE login = :mdp');
        $requete->bindValue(':log', (int) $user);
        $requete->execute();
        
       
        
        $news = $requete->fetch(0);
        
                if ($mdp = $news){
                    return true;
                }
                
                else {
                    return false;
                }
    }
        
    }
    
    
    


