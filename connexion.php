<?php
if(isset($_POST["ok"])){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    if($username == "admin" && $pwd == "naruto"){
        
        //echo $username." a été authentifié avec succès";

        //Code pour le rediriger sur la page Commandes ??
        header("Location: commandes.php");
    }

    else{
        //echo "Désolé ".$username.", vous n'êtes pas autorisé à accéder à notre liste de commandes";
        header("Location: error.html");
        //Code pour le rediriger sur la page Accueil ??
        //header("Location: index.html");

    }

}

?>