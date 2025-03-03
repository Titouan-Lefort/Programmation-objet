<?php

class Vehicule
{

    public $id;
    public $marque;
    public $modele;
    public $immatriculation;
    public $statut;
    public $prix;


public function __construct(array $row = []) {
    $this->id = $row["id_voiture"];
    $this->marque = $row["marque"];
    $this->modele = $row["modele"];
    $this->immatriculation = $row["immatriculation"];
    $this->prix = $row["prix"];
    $this->statut = $row["statut"];

}

public static function all(){
    require_once('Bdd.php');
    $pdo=Bdd::PDO();
    if (!isset($pdo)){
        echo "erreur de connexion";
    }
    $sql="SELECT * FROM voitures";
    $temp=$pdo->query($sql);
    $result=$temp->fetchAll();
    $vehicules=[];
    foreach ($result as $row){
        $vehicules[] = new Vehicule($row); 
    }
    return $vehicules;
}
}


?>