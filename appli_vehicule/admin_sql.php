<?php
    require_once("Bdd.php");
    $pdo = Bdd::PDO();
    if ($_SESSION['admin'] == 1){
        if (isset($_GET["marque"]) AND isset($_GET["modele"]) AND isset($_GET["immatriculation"]) AND isset($_GET["statut"]) AND isset($_GET["prix"])){
            if($_GET["bouton"] == "modifier"){
                $sql=Bdd::commande("UPDATE voitures SET marque='".$_GET["marque"]."',modele='".$_GET["modele"]."',immatriculation='".$_GET["immatriculation"]."',statut='".$_GET["statut"]."',prix='".$_GET["prix"]."' WHERE id_voiture=".$_GET["id"]) ;
            }
            if($_GET["bouton"] == "ajouter"){
                $sql=Bdd::commande("INSERT INTO voitures (marque, modele, immatriculation, statut, prix) VALUES ('".$_GET["marque"]."','".$_GET["modele"]."','".$_GET["immatriculation"]."','".$_GET["statut"]."','".$_GET["prix"]."')");
            }
        }

        
        if (isset($_REQUEST["del"])){
            if($_REQUEST["del"] == 1){
                $sql=Bdd::commande("DELETE FROM voitures WHERE id_voiture =".$_REQUEST["id"]);
            }
        }
    }