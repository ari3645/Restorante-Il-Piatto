<?php
session_start();

// Informations d'identification
$serveur = "restaurant-il-piatto2.mysql.database.azure.com";
$dbname = "restaurantilpiatto";
$user = "ilpiatto";
$pass = "Ari36.45";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupère les données du formulaire
    $datetime = filter_input(INPUT_POST, 'datetime', FILTER_SANITIZE_STRING);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'Prenom', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    $nb = filter_input(INPUT_POST, 'nb', FILTER_SANITIZE_NUMBER_INT);

    try {
        // Connexion à la base de données
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparer la requête d'insertion
        $sql = $dbco->prepare("INSERT INTO reservation (datetime, nom, prenom, mail, nb_personnes) VALUES (:datetime, :nom, :prenom, :mail, :nb)");
        $sql->bindParam(':horaire_date', $datetime);
        $sql->bindParam(':nom', $nom);
        $sql->bindParam(':prenom', $prenom);
        $sql->bindParam(':mail', $mail);
        $sql->bindParam(':nombre_personnes', $nb);

        // Exécuter la requête
        $sql->execute();

        // Message de succès
        $_SESSION['ajout_reservation'] = "Réservation réussie. Merci de votre réservation !";
        header("Location: index.php"); // Redirection vers la page de réservation
        exit();

    } catch (PDOException $e) {
        // Message d'erreur
        $_SESSION['ajout_reservation'] = "Erreur lors de la réservation : " . $e->getMessage();
        header("Location: index.php"); // Redirection vers la page de réservation
        exit();
    }
}
?>
