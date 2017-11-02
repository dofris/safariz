 <?php

class BDD 
{
    private $bdd;
    // private $bdd;
    public function __construct() {
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
        return $tg;
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
    
   public function nbrParticipant(){
        $requete = $this->bdd->prepare("SELECT count(*) FROM PARTICIPANT");
        $req =  $requete->execute();
        $reponse = $req->fetchAll();
        if ($req == 0) {
            echo "Le nombre de participant est de 0";
        } else {
            echo "Le nombre de participant est de " . $requete;
        }
    }
    
    
    //Nombre de gagnant
    public function nbrGagnant(){
        $gagnant = "SELECT COUNT(*)FROM GAGNER";
        //echo " Le nombre de gagnant est de ".$gagnant;
        $ngagnant = $this->bdd->query($gagnant);
        echo  $ngagnant->fetchAll();
        $ngagnant->fetchAll();
        return $ngagnant;
    }
    
    //Nombre total de lot
   public function nbrLot(){
        $lot = "SELECT COUNT(*) FROM LOT";
        $nlot = $this->bdd->query($lot)
        ;
        //echo " Il y a ".$lot." lots au départ du jeu";
        var_dump($nlot->fetchAll())  ;
        return $nlot;
        
    }
    
}  