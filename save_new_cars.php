<?php
require_once 'config.php';
$idProprio = htmlspecialchars($_GET['idClient']);
if (isset($_POST['voiture']) &&  isset($_POST['couleur']) && isset($_POST['modele']) && isset($_POST['prix']) && isset($_POST['capacite']) && isset($_FILES['img']) && isset($_POST['description'])) {
    $voiture = htmlspecialchars($_POST['voiture']);
    $color = htmlspecialchars($_POST['couleur']);
    $model = htmlspecialchars($_POST['modele']);
    $prix = htmlspecialchars($_POST['prix']);
    $capacite = htmlspecialchars($_POST['capacite']);
    $description = htmlspecialchars($_POST['description']);
    $image = $_FILES['img']['name'];

    $check = $bdd->prepare('INSERT INTO voiture(Nomv,img,description,Capacite,Modele,Couleur,prix_location,idProprio) VALUES (:nom,:img,:description,:capacite,:modele,:couleur,:prix,:idProprio)');
    $check->execute(array(
        'nom' => $nom,
        'img' => $image,
        'description' => $sexe,
        'capacite' => $age,
        'modele' => $culture,
        'description'=>$description,
        'couleur' => $localite,
        'prix' =>$prix,
        'idProprio' => $idProprio
    ));
    header('Location: proprio.php');
}
