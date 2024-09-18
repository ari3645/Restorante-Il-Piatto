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

    <div class="left">
        <form method="POST" action="ajout_reservation.php" enctype="multipart/form-data"> 
            <h3>Réserver une table</h3>
            <p>Date et Heure :</p> <input type="datetime-local" name="datetime" required>
            <p>Nom : </p><input type="text" name="nom" required>
            <p>Prénom : </p><input type="text" name="Prenom" required>
            <p>Adresse Mail : </p><input type="text" name="mail" required>
            <p>Nombre de personnes : </p><input type="number" name="nb" required>
            <button class="bn1" type="submit">Réserver</button>
            
            <?php
            // Vérifier si un message de succès est défini dans la session
            if (isset($_SESSION['ajout_reservation'])) {
                // Afficher le message de succès
                echo "<p>" . $_SESSION['ajout_reservation'] . "</p>";
                // Supprimer le message de la session pour qu'il ne s'affiche plus après un rafraîchissement de la page
                unset($_SESSION['ajout_reservation']);
            }
            ?>
        </form>
      </div>
</body>
</html>
