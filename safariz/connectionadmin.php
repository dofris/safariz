<?php

class connectionadmin
{ 
    private $username;
    private $mdp;
    
   function  __construct($user, $pd){
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

    
    
    
    
}

