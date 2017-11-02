<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

__autoload("BDD");


//$dbase = new connectionadmin("", "");

// function nbrParticipant($db){
//     $requete = $db->prepare("SELECT count(*) FROM PARTICIPANT");
//     $req =  $requete->execute();
//     $reponse = $req->fetch();
//     if ($req == 0) {
//         echo "Le nombre de participant est de 0";
//     } else {
//         echo "Le nombre de participant est de " . $requete;
//     }
// }


// //Nombre de gagnant
// function nbrGagnant($db){
//     $gagnant = "SELECT COUNT(*)FROM GAGNER";
//     //echo " Le nombre de gagnant est de ".$gagnant;
//     $ngagnant = $db->query($gagnant);
//     echo $db->fetchAll($ngagnant);
//     return $ngagnant;
// }

// //Nombre total de lot
//  function nbrLot($db){
//     $lot = "SELECT COUNT(*) FROM LOT";
//     $nlot = $db->query($lot)->fetch();
//     //echo " Il y a ".$lot." lots au départ du jeu";
//     echo $nlot; 
//     return $nlot;
   
// }


// //Nombre de lot restant (pas encore gagner) A revoir
// function nbrRestant($db){
//    $restant= nbrGagnant()-nbrLot();
//    echo $restant;
//    return $restant;
// }
$dbase = new BDD();
$a=$dbase->nbrGagnant();
$b=$dbase->nbrlot();