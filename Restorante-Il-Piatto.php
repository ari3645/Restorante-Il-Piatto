<?php
    // $serveur = "localhost";
    // $dbname = "Website";
    // $user = "root";
    // $pass = "";
    
    // $login = $_POST["login"];
    // $password = $_POST["password"];

    // $contenu=$_POST["nom"];
    // echo $contenu;
    // try{

    //     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    //     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //     //On vérifie si le login existe déjà et si le mot de passe correspond
    //     $sth = $dbco->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
    //     $sth->bindParam('login',$login);
    //     $sth->bindParam('password',$password);
    //     $sth->execute();
    //     $count = $sth->rowCount();
    //     //Variable qui prend comme atrribut le nom de role du user
    //     $role = $sth->fetchColumn(2);

    //     if($count == 1 and $role == '1'){
    //         echo 'Connexion réussie';
    //         header("Location:admin.html");
    //     }else if ($count == 1 and $role == '2'){
    //         echo 'Connexion réussie';
    //         header("Location:user.html");
    //     }else if ($count == 1 and $role == '3'){
    //         echo 'Connexion réussie';
    //         header("Location:commercial.html");
    //     }else{
    //         echo 'Mauvais identifiants';
    //     }


    //     // //On insère les données reçues
    //     // $sth = $dbco->prepare("
    //     //     INSERT INTO form(login, password)
    //     //     VALUES(:login, :password)");
    //     // $sth->bindParam('login',$login);
    //     // $sth->bindParam('password',$password);
    //     // $sth->execute();
        
    //     // header("Location:form-merci.html");
    // }
    // catch(PDOException $e){
    //     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    // }
?>