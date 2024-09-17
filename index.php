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
    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Azure Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to My Azure Website</h1>
    <p>Here you can find some information about our services.</p>

    <div class="left">
        <form method="POST" action="add_reservation.php" enctype="multipart/form-data"> 
            <h3><center>Réserver une table</center></h3>
            <p>Date et Heure :</p> <input type="datetime-local" name="datetime" required>
            <p>Nom : </p><input type="text" name="nom">
            <p>Prénom : </p><input type="text" name="Prenom">
            <p>Adresse Mail : </p><input type="text" name="mail">
            <p>Nombre de personnes : </p><input type="number" name="nb">
            <center><button class="bn1" type="submit">Réserver</button></center>
            
            <?php
            // Vérifier si un message de succès est défini dans la session
            if (isset($_SESSION['ajout_ndf'])) {
                // Afficher le message de succès
                echo "<p>" . $_SESSION['ajout_ndf'] . "</p>";
                // Supprimer le message de la session pour qu'il ne s'affiche plus après un rafraîchissement de la page
                unset($_SESSION['ajout_ndf']);
            }
            ?>
        </form>
      </div>

</body>
</html>
