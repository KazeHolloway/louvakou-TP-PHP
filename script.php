<?php
$user = 'root';
$pass = '';

try{
    $db = new PDO( 'mysql:host=localhost;dbname=nounours_db', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location: valider.html");

}
catch (PDOException $e) {
    echo "La connexion a échoué: ".$e->getMessage()."<br/>";
    die;
}

if(isset($_POST['Envoyer'])){
    $name =$_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $quantity = $_POST['quantity'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    $sql = ("INSERT INTO `commandes`( `nom`, `prenom`, `email`, `adresse_livraison`, `quantite`, `couleur`, `prix_unitaire`) VALUES(:nom, :prenom, :email, :adresse_livraison, :quantite, :couleur, :prix_unitaire)");
    $start = $db->prepare(($sql));

    $start->bindParam(':nom', $name);
    $start->bindParam(':prenom', $lastName);
    $start->bindParam(':email', $email);
    $start->bindParam(':adresse_livraison', $adress);
    $start->bindParam(':quantite', $quantity);
    $start->bindParam(':couleur', $color);
    $start->bindParam(':prix_unitaire', $price);
    
        $start->execute();
        
}

?>