<?php 

function __autoload($class_name) {
    include $class_name . '.php';
}

__autoload(connectionadmin);

$user= $_POST['login'];
$mdp = $_POST['mot_de_passe'];
$approuve= new connectionadmin($user, $mdp);
$valide = $approuve->identification();
if ($valide ==false){
    header("C:\xampp\htdocs\eclipse\safariz\safariz\administration.html");
    
}
else {
    echo("lol");
    
}


?>


