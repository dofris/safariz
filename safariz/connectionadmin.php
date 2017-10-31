<?php

class connectionadmin
{
    
    
    private $username;
    private $mdp;
    private $bdd;
    
   function  __construct($user, $pd){
       $this->mdp=$pd;
       $this->username=$user;
       
           // $dbname="mysql:host=localhost;dbname=".$dbname;
           //$this->driver ="mysql:host=localhost;dbname=$dbname;charset=utf8";
           try {
               $this->bdd = new PDO( "mysql:host=localhost;dbname=safariz;charset=utf8", 'root', '' );
               
           } catch(Exception $e) {
               die('Erreur : '. $e->getMessage());
           }
           
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

    public function identification(){
        $requete = $this->db->prepare('SELECT mdp FROM admin WHERE login = :log');
        $requete->bindValue(':log',  $this->username);
        $requete->execute();
        
       
        
        $news = $requete->fetch();
        
                if ($mdp = $news){
                    return true;
                }
                
                else {
                    return false;
                }
    }
        
    }
    
    
    


