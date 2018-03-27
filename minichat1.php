<!DOCTYPE html>
<html>
<head>	
  <meta charset="utf-8">	
  <title>Mini-chat openclassroom</title>	
  <link rel="stylesheet" href="style.css">
</head>
<br />
<img src="minichat.png" alt="Openclassrooms" >
<body>		
  <h1 style="text-align: center;">Bienvenue dans le mini-chat. Bonne discussion !</h1>	
  
  <?php        
  //je déclare la variable $cookiePseudo        
  $cookieid = $_COOKIE['pseudo'] ;        
  
  /*Si l'utilisateur tente d'accèder au minichat.php sans renseigner son pseudo dans        
  le formulaire il sera automatiquement rediriger vers le formulaire*/        
  
  if (empty($_COOKIE['pseudo']))        
    {        	
      header('Location: index.php');        
    }    
  
?>	

<form id="chat" action="minichat_post1.php" method="post" style="text-align: center;">
<br />		
<label>Pseudo :</label>		

<!-- On affiche le pseudo qui à été mis dans le cookie -->		
<input class="champs" type="text" name="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>" required=""/>				
<br />		
<br />		
<label>Message :</label>		
<input type="text" name="message" required="">		
<br />		
<br />		
<!-- Bouton pour actualiser le minichat.-->		
<input class="button5" type="submit" name="Envoyer"><?php echo "<br /><input class='button6'type='submit' name='refresh' value='Rafraîchir' onclick='window.location.reload();'>"; ?>		
<br />
<br />	
</form><section id="text">

<?php//connexion à la base de données
try
{	
  $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
  catch(Exception $e)
{	
  die('Erreur : '.$e->getMessage());}
  
  // Récupération des 10 derniers messages
  $reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_creation, "%d/%m/%Y %Hh%imin %ss") AS date_creation FROM minichat_open ORDER BY ID DESC LIMIT 0, 10');
  
  // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
  while ($donnees = $reponse->fetch()) 
  {	
    echo '<p style="padding-left:30px;"><i style="color:orange; font-size:13px;">'. $donnees['date_creation'] . '</i>'. '&nbsp;&nbsp;&nbsp;&nbsp;' .'<strong style="color:cyan;">'. htmlspecialchars($donnees['pseudo']) . '</strong> :  &nbsp;&nbsp;&nbsp;&nbsp;' .'<i>' . htmlspecialchars($donnees['message']) . '</i>' . '</p>' ;
  }
  
  //Fermeture de la requête
  $reponse->closeCursor();
  ?>
  
  </section>
  </body>
  </html>
