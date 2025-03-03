<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voiture</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("header.php");
    require_once ("admin_sql.php");
    require_once ("vehicule.php"); 
    $vehicules = Vehicule::all();
    if ($_SESSION["admin"] == 1){
        echo "";
    }
    echo "
            <table>
            <tr>
            <th>Id</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Date immatriculation</th>
            <th>Disponibilité</th>
            <th>Prix/jour</th>
            <th>Info</th>";
            if ($_SESSION["admin"] == 1){ echo"<th>Action</th>";}
            "</tr>";?>
<?php foreach ($vehicules as $vehicule): ?>
    <tr>
        <td class='table'><?php echo $vehicule->id; ?></td>
        <td class='table'><?php echo $vehicule->marque; ?></td>
        <td class='table'><?php echo $vehicule->modele; ?></td>
        <td class='table'><?php echo $vehicule->immatriculation; ?></td>
        <td class='table'><?php echo $vehicule->statut; ?></td>
        <td class='table'><?php echo $vehicule->prix; ?> €</td>
        <td><a href=''><img id='detail' src='info.png'></a></td>
        <td><?php if ($_SESSION["admin"] == 1){ echo "<a class='action' href='formulaire.php?id=".$vehicule->id."&action=modifier'>Modifier</a>";}?></td>
        <td><?php if ($_SESSION["admin"] == 1){ echo "<a class='action' href='voiture.php?del=1&id=".$vehicule->id."'>supprimer</a>";}?></td>
        
    </tr>
    <?php endforeach; 
            echo "</table>";
    ?>
<script src="script.js"></script>
</body>
</html>