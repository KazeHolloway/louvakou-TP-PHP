<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Louvakou</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div id="header">
            <div class="logo">
                <span>LOUVAKOU</span>
            </div>

            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="achat.html">Achat</a></li>
                    <li><a href="commandes.php">Commandes</a></li>
                </ul>
            </nav>
        </div>

        <h1>Liste Des Commandes</h1>
        
        <div class="liste">

            <div class="list-item">
                <!-- Info from the database -->
                
                <?php

                $user = 'root';
                $pass = '';

                //On instancie un objet PDO pour créer une connexion à la BD
                $db = new PDO( 'mysql:host=localhost;dbname=nounours_db', $user, $pass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //Requete pour afficher toutes les commandes par ordre croissant (ASC) par rapport à l'id
                $requete = "SELECT * FROM `commandes` ORDER BY id ASC";

                //On récupère le résultat à l'aide de la fonction query()
                $result = $db->query($requete);

                if(!$result){
                    echo "Un problème a été rencontré lors de la récupération des données";
                }
                else{
                    //On recupère le nombre de clients grâce à la fonction native de php rowCount()
                    $nbre_clients = $result->rowCount();
                }

                ?>

                <!--Afficher le nbre de commandes-->
                <h4>Voici toutes nos commandes !!</br>Il y en a actuellement <?=$nbre_clients?></h4> </br>

                <table border="3">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse email</th>
                        <th>Adresse de livraison</th>
                        <th>Quantité de nounours</th>
                        <th>Couleur du nounours</th>
                        <th>Prix unitaire</th>
                    </tr>

                    <?php

                    //fetch() permet de récupérer ligne par ligne le resultat d'une requete SELECT
                    while($ligne = $result->fetch(PDO::FETCH_NUM)){
                        echo "<tr>";
                        foreach($ligne as $valeur){
                            echo "<td>$valeur</td>";
                        }
                        echo "</tr>";
                    }

                    ?>

                </table>

                <?php
                //closeCursor() libère notre connexion afin de permettre à d'autres requetes sql d'exécuter without problem
                $result->closeCursor();
                ?>

            </div>

        </div>
        
    </body>
</html>