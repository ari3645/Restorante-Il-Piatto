<?php
// Informations d'identification
$serveur = "restaurant-il-piatto2.mysql.database.azure.com";
$dbname = "restaurantilpiatto";
$user = "ilpiatto";
$pass = "Ari36.45";

// Chemin vers les certificats SSL (selon la configuration Azure ou MySQL)
$ssl_ca = 'DigiCertGlobalRootCA.crt.pem'; // Certificat CA, spécifique à votre fournisseur

try {
    // Options SSL pour sécuriser la connexion
    $options = [
        PDO::MYSQL_ATTR_SSL_CA => $ssl_ca
    ];

    // Connexion à la base de données avec options SSL
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass, $options);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la connexion est réussie
    echo "Connexion sécurisée réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    echo "Erreur de connexion sécurisée : " . $e->getMessage();
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
        <form method="POST" action="add_ndf.php" enctype="multipart/form-data"> 
            <h3><center>Ajouter note de frais</center></h3>
            <center><hr></center>
            <p style="margin-top:13.5px;">Intitulé : </p><input type="text" name="intitule" >
            <p>Date : </p><input type="text" name="date">
            <p>Montant : </p><input type="number" name="montant">
            <p>Lieu : </p><input type="text" name="lieu">
            <p>Id Frais : </p><input type="number" name="id_frais">
            <center><p>Ajouter une image : </p><input type="file" name="image" style="padding-left:25%; background-color: transparent;"></center>
            <center><button class="bn1" type="submit">Ajouter</button></center>
            
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
