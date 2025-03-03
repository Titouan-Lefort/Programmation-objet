<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="nav">
            <h1>Location véhicules</h1>
            <a href='connexion.php' class="deco">Déconnexion</a>
            <a href="voiture.php" class="navig">Accueil</a>
            <?php if ($_SESSION["admin"] == 1){ echo '<a class="navig" href="formulaire.php?action=ajouter" >Ajouter</a>';}?>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>