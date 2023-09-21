<?php
// Demarrer la session
session_start();
if(isset($_POST['valider'])){
  
// TESTER L'ENVOI DU FORMULAIRE

    if(isset($_POST['user']) && isset($_POST['mdp'] ) !=""){
     //Nous allons mettres l'email et le mot de passe dans des variables 
      $email = $_POST['user'];
      $mdp = $_POST['mdp'];
      $erreur = "";
    // Nous allons vérifier si les infos sont correctes
    // Connexion à la bd
      $nom_serveur = "localhost";
      $utilisateur = "root";
      $mot_de_passe = "";
      $nom_base_données = "login";
      $conn = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données  );

    // requete pour selectionner tous les users
    $req = mysqli_query($conn , "SELECT * FROM utilisateurs WHERE email = '$email' AND  mdp = '$mdp' ");
      $num_ligne = mysqli_num_rows($req);// Compter le nombre de ligne ayant rapport a la requete SQL 
      if($num_ligne > 0){
        header("location:bienvenue.php");
        //Si le nombre de ligne est > 0 ? on sera redirigé vers la page bienvenue.php
      $_SESSION['email'] = $email;
      }
      else{
        $erreur = "Votre mot de passe ou votre mail est incorrectes";
        
      }
    
    } 
    
};
?>