<?php
   session_start(); 
   $_SESSION["mdp"]=$_POST["mdp"];  // Récupération du mot de passe
   $_SESSION["Login"]=$_POST["Login"];  // Récupération du login
?>

<!DOCTYPE html>
 <html lang="fr">
  <head>
   <meta charset="UTF-8" />
   <title>Bonjour <?php echo $_SESSION["Login"]; ?></title>
   <link rel="stylesheet" type="text/css" href="./styles/styleSAE2.css" />
  </head>
  <body>
		<!-- Affichage entete -->
		<?php 
			include("entete.html"); 
		?>
		<section>
			<div><h1><br />&nbsp;&nbsp;Bienvenue : <?php echo $_SESSION["Login"]; ?><br /><br /></h1></div>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<form action="login.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Saissez le login...</legend>
					<label for="Login">Login : </label>
					<input type="login" name="Login" id="Login" />
				</fieldset>
				<fieldset>
					<legend>Saissez le mot de passe...</legend>
					<label for="mdp">Mot de passe : </label>
					<input type="password" name="mdp" id="mdp" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
			<hr />
		</section>
    <nav>
    <ul>
     <li><a href="index.html">Retour accueil</a></li>
     <li><a href="quitter.php">Quitter la session</a></li>
    </ul>
   </nav>
  </body>
</html>