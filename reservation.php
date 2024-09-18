<?php
session_start();

// Informations d'identification
$serveur = "restaurant-il-piatto2.mysql.database.azure.com";
$dbname = "restaurantilpiatto";
$user = "ilpiatto";
$pass = "Ari36.45";

try {
    // Connexion à la base de données sans SSL
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher un message de succès si la connexion est réussie
    //echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserver</title>
    <link rel="stylesheet" href="reservation.css">
    <link rel="icon" href="images/IL_PIATTO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar bg-body-tertiary row">
        <div class="col-md-4">
            <form class="container-fluid ">
                <button class="button-back " type="button" onclick="window.location.href='index.php';"> <strong> < Retour </strong></button>
          
            </form>
        </div>
        <div class="col-md-7">
            <img class="reserver" src="RESERVER.png" style="width: 250px; ">
        </div>
        <div class="col-md-1">
            
            <img class="logo" src="IL_PIATTO.png" >

        </div>
        </nav>

    
    <div class="container-fluid">
      
            <div class="card-left">
                <p style="color:aliceblue">Pour toute réservation supérieure à 10 personnes ou pour tout autre demande spécifique, veuillez contacter le restaurant au 06 05 04 03 02. </br></br>

                    A la suite de votre réservation, vous recevrez une confirmation par mail.
                    </p>
                <img src="IL_PIATTO.png" style="height: 200px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); border-radius: 150px; margin-top: 40px;">
            </div>

            <div class="card-right">
                <form method="POST" action="ajout_reservation.php" enctype="multipart/form-data">

               <h3 class="instrument-serif-regular-italic"><center>Reservation</center></h3>

                <span class="note-container" id="note-container">
                
                <p>Date et Heure : <input type="datetime-local" name="datetime" required></p>
                
                <p>Nom : <input type="text" name="nom" required></p>
                
                <p>Prénom : <input type="text" name="Prenom" required></p>
                
                <p>Adresse Mail : <input type="text" name="mail" required></p>
                
                <p>Nombre de personnes : <input type="number" name="nb" required></p>
 </br>
 </br>
 </br>
                <center><button class="button-bottom" type="submit">Réserver</button>

                    <?php
                    // Vérifier si un message de succès est défini dans la session
                    if (isset($_SESSION['ajout_reservation'])) {
                        // Afficher le message de succès
                        echo "<p>" . $_SESSION['ajout_reservation'] . "</p>";
                        // Supprimer le message de la session pour qu'il ne s'affiche plus après un rafraîchissement de la page
                        unset($_SESSION['ajout_reservation']);
                    }
                    ?>
 
                </span>

            </div>
   
    </div>

</body>
</html>