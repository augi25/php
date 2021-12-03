<?php
session_start();
require_once 'config.php';

// verifier si les champs inputs exites (1)

if(isset($_POST['email']) && isset($_POST['pass'])){
    $email=htmlspecialchars($_POST['email']);/*stockage */

    $password=htmlspecialchars($_POST['pass']);
     
    var_dump($password);

    $check=$bdd->prepare('SELECT idClient,email,MDP FROM client WHERE email=?');/*voir si la personne existe dans notre base de données*/
    
    $check->execute(array($email));/*renseignement de l'email*/
    
    $data=$check->fetch();/*enregistrement des données de la base de données dans la variable  data et recherche avec fetch*/
    
    $userexist=$check->rowCount();/*pour verifier si la personne existe dans la table*/
    
    if($userexist==1){
        if(filter_var($email,FILTER_VALIDATE_EMAIL))/*verifié si l'eamil est valide*/
        {
            $password= hash('sha256',$password);/* haché le mot de passe avec l'algorithme */
            if($data['MDP']=== $password)/*verification du mot de passe*/
            {
                $_SESSION['user']= $data['idClient'];
                var_dump($data['MDP']);/*créer une session et mettre en valeur l'id*/
               header('Location:proprio.php?id='.$_SESSION['user']);/*redirection sur la page de Client/Proprie*/
            }/*c'est que la personne exite*/
        }   
    }
}