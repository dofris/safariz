<?php
   
function connectBDD(){
 try {
            $driver = 'mysql:host=localhost;dbname=safariz';
            $utilisateur = 'root';
            $motDePasse = '';
            $connexion = new PDO($driver, $utilisateur, $motDePasse);
            echo"bravooooo";
        } catch (Exception $e) {
            echo "Connection à MySQL impossible : ", $e->getMessage();
            die();
        }
return $connexion;
}
