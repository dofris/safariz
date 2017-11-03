<?php
require 'autoload.php';
require 'connexion.php';

$dbname = connectBDD();
$manager = new ManagerParticipant($dbname);


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['cp']) 
        && isset($_POST['ville']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $participant = new Participant(array(
        '_nom'=>$nom,
        '_prenom' => $prenom,
        '_adresse' => $adresse,
        '_cp' => $cp,
        '_ville' => $ville,
        '_email' => $email,
        '_tel' => $tel));
    var_dump($participant);
    $manager->ajouP($participant);


    /* if (!$participant->isValid()) {
      $message = "Veuillez remplir tout les champs ";
      } else {
      $manager->save($news);
      } */
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>SAFARIZ</title>
        <meta charset="UTF-8">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="container">
        <div class="row">
            <p>Gagnez un SAFA'RIZ <br> en Afrique</p>
        </div>

        <div class="form">        
            <form method="post" action="inscription.php" >					
                <p>
                    <label for="nom">Nom: </label>			
                    <input id="nom" type="text" name="nom" size="20"/>                    
                    <label for="prenom">Prenom: </label>		
                    <input id="prenom" type="text"  name="prenom" size="20"/></p> <br>
                <p>
                    <label for="adresse">Adresse: </label>		
                    <input id="adresse" type="text"  name="adresse" size="50"/></p> 

                <label for="cp">Code Postal: </label>		
                <input id="cp" type="text"  name="cp" size="5"/>
                <label for="ville">Ville: </label>		
                <input id="ville" type="text"  name="ville" size="20" /><br> <p>
                <p>    
                    <label for="tel">Telephone: </label>		
                    <input id="tel" type="text"  name="tel" size="10"/>  
                    <label for="email">Email: </label>
                    <input id="email" type="email"  name="email" size="30" /></p> <br>                        
                <p> 
                    <input type="checkbox" name="reglement" value=1>J'accepte <a id="checkbox" href="reglement.html">Le reglement du jeu</a>
                </p>


                <button class="btn-danger center-block">VALIDER VOTRE INSCRIPTION</button></form>
        </div>
        <footer>
            <a href="inscription.html">Accueil</a>
            <a href="reglement.html">Reglement</a>
            <a href="contact.html">Contact</a>
            <a href="administration.html">Admin</a>
        </footer>         
    </body>
</html>

