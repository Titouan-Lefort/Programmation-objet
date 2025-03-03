<?php
    include("lien_sql.php");
    session_start();
    $validation=0;
    $_SESSION["admin"] = 0;

    $sql="SELECT * FROM utilisateur";
    $temp = $pdo->query($sql);

    while($resultat=$temp->fetch()){
        if(isset($_POST["nom"]) AND isset($_POST["mdp"]))
            if($_POST["nom"] == $resultat["nom"] AND $_POST["mdp"] == $resultat["mdp"]){
                $validation = 1;
                if ($resultat["admin"] == 1)
                    $_SESSION["admin"] = 1;
            }

        }
        $resultat=$temp->fetch();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if ($validation == 0){
            echo "<form method='post' action='connexion.php'>
                    <input name='nom' type='text' placeholder='Identifiant'>
                    <input name='mdp' type='password' placeholder='Mot de passe'>
                    <input type='submit' value='valider'>
                </form>";
            }
        if ($validation == 1){
            echo "<a href='voiture.php'>Voitures</a>";
        }
        
    
    ?>
<script src="script.js"></script>
</body>
</html>