 <?php

class BDD extends PDO
{
    private $utilisateur='root';
    private $motDePasse='';
    private $driver;
    private $bdd;
    // private $bdd;
    public function __construct($dbname) {
        // $dbname="mysql:host=localhost;dbname=".$dbname;
        //$this->driver ="mysql:host=localhost;dbname=$dbname;charset=utf8";
        try {
            $this->bdd = new PDO( "mysql:host=localhost;dbname=safariz;charset=utf8", 'root', '' );
            
        } catch(Exception $e) {
            die('Erreur : '. $e->getMessage());
        }
        
    }
    
    public function requete($requete) {
        $tg = $this->bdd->query($requete) or exit(print_r($this->bdd->errorInfo()));
        echo $tg;
    }
    
    public function fetchAll($resultat) {
        return $resultat->fetchAll();
    }
    
    public function compteur($resultat) {
        if(is_object($resultat)) {
            echo 'ok';
        } else {
            echo 'pas ok';
        }
        return $resultat->rowCount();
    }
    
    public function close($resultat) {
        return $resultat->closeCursor();
    }  
    
}

