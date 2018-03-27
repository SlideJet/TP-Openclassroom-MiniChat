<?php
//je créer un cookie contenant le pseudo de l'utilisateur.    
setcookie('pseudo', $_POST['pseudo'], time() + 24*3600, null, null, false, true);

//Puis je redirige sur le minichat.    
header('Location: minichat1.php');

?>
