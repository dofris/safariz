<?php 

function __autoload($class_name) {
    include $class_name . '.php';
}

__autoload("connectionadmin");

$user= $_POST['login'];
$mdp = $_POST['mot_de_passe'];
$approuve= new connectionadmin($user, $mdp);
$valide = $approuve->identification($user);
if ($valide ==false){
    header("Location: ./administration.html");
    echo("lol");}

else {
    var_dump($valide);
    
    echo("lol");
    header("Location: ./backoffice.php");
    exit();
}


?>


