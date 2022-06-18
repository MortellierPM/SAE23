<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Programme: choix_type.php
Description: Affiche pour sélection la liste des types de pièces proposées, à partir de la table Type
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Choix du capteur</title>
		<link rel="stylesheet" type="text/css" href="./styles/styleSAE2.css" />
	</head>

	<body>
		<?php
			include("entete.html");
		?>
		<section>
			<br />
			<form action="nouveaucapteur.php" method="post" enctype="multipart/form-data">
				<fieldset class="gauche">
					<legend>Choisissez le capteur que vous désirez visionner</legend>
					<?php
						/* Accès à la base */
						include ("mysql.php");

						/* Sélection du Batiment dans la table Batiment */
						$requete = "SELECT * FROM `Type` ORDER BY `Capteur`";
						$resultat = mysqli_query($id_bd, $requete)
							or die("Ex&eacute;cution de la requete impossible");
						mysqli_close($id_bd);

						$i=true;		
						while($ligne=mysqli_fetch_array($resultat))
						 {
							extract($ligne);
							echo "<br />";
							if ($i)
							 {
								echo '<input type="radio" name="type" value="'.$Nom_Capt.'" id ="'.$Nom_Bat.'" checked="checked" /> ' ;
								echo '<label for="'.$Capteur.'"><strong>'.$LibelleType.'</strong></label><br />';
								$i=false;
							 }
							else
							 {
								echo '<input type="radio" name="type" value="'.$CodeType.'" id ="'.$CodeType.'" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$LibelleType.'</strong></label><br />';
							 }  
						 } 
						/* Sélection du capteur dans la table Capteur */
						/*$requete = "SELECT * FROM `Type` ORDER BY `CodeType`";
						$resultat = mysqli_query($id_bd, $requete)
							or die("Ex&eacute;cution de la requete impossible");
						mysqli_close($id_bd);

						$i=true;		
						while($ligne=mysqli_fetch_array($resultat))
						 {
							extract($ligne);
							echo "<br />";
							if ($i)
							 {
								echo '<input type="radio" name="type" value="'.$CodeType.'" id ="'.$CodeType.'" checked="checked" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$LibelleType.'</strong></label><br />';
								$i=false;
							 }
							else
							 {
								echo '<input type="radio" name="type" value="'.$CodeType.'" id ="'.$CodeType.'" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$LibelleType.'</strong></label><br />';
							 }  
						 } */
					?>
				</fieldset>
				<div class="valid">
					<input type="submit" value="Faites votre choix" />
				</div>
			</form>
		</section>
	</body>
</html>
