<?php
/*Si tentative de se connecter directement au minichat sans renseigner son pseudo
on renvoie l'utilisateur sur le formulaire de saisie pseudo.*/

if(empty($_POST['pseudo']))	
{		
  header('Location: index.php');	
}

//Connexion à la base de données
try	
{		
  $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
}
  catch(Exception $e)	
{		
  die('Erreur : '.$e->getMessage());	
}

// Insertion du message à l'aide d'une requête préparée.
$requete = $bdd->prepare('INSERT INTO minichat_open(pseudo, message) VALUES(?,?)');
$requete->execute(array($_POST['pseudo'], $_POST['message']));

/* Ferme le curseur, permettant à la requête d'être de nouveau exécutée et permet aussi de libérer la mémoire du serveur.
========Moralité : toujours fermer les requêtes avec closeCursor();========*/

$requete->closeCursor();

// Redirection du visiteur vers la page du minichat.
header('Location: minichat1.php');?>
