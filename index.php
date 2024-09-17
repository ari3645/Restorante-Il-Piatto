<?php
session_start();

// Informations d'identification
$serveur = "restaurant-il-piatto2.mysql.database.azure.com";
$dbname = "restaurantilpiatto";
$user = "ilpiatto";
$pass = "Ari36.45";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $login = filter_input(INPUT_POST, 'login');
    $password = filter_input(INPUT_POST, 'password');

    try {
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $dbco->prepare("SELECT * FROM utilisateur WHERE Nom_utilisateur = :login AND mot_de_passe = :password");
        $sql->bindParam('login', $login);
        $sql->bindParam('password', $password);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Stocker le message de succès dans la session
            $_SESSION['success_message'] = "Connexion réussie. Bienvenue, " . $login . "!";
            // Redirection vers la même page pour afficher le message
            header("Location: index.php");
            exit();
        } else {
            // Stocker le message d'erreur dans la session
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect.";
            header("Location: index.php");
            exit();
        }

    } catch (PDOException $e) {
        // Stocker le message d'erreur en cas d'échec de connexion à la base de données
        $_SESSION['error_message'] = "Une erreur s'est produite lors de la connexion à la base de données.";
        header("Location: index.php");
        exit();
    }
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
    <p>This is a sample website hosted on Azure.</p>

    <!-- Afficher le message de succès ou d'erreur -->
    <?php
    session_start();
    if (isset($_SESSION['success_message'])) {
        echo '<p style="color:green;">' . $_SESSION['success_message'] . '</p>';
        unset($_SESSION['success_message']); // Supprimer le message après l'affichage
    }
    if (isset($_SESSION['error_message'])) {
        echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']); // Supprimer le message après l'affichage
    }

    echo "<p>hello world</p>";
    ?>

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
