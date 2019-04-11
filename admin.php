<!DOCTYPE html>
<html lang="fr">
<head>
<title>DO TRIPS</title>
<meta charset="utf-8"> <!-- reconnaissance des accents -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DoTrips Projet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main_styles.css">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">
<!--images de réseaux sociaux -->
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
</head> 

<body>

<div class="super_container"> <!-- grand bloc d'élements -->

	<!-- En tête / header -->

	<header class="super_container">
		
		<!-- Bar d'en tête / top bar -->
		
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="social"></div>
							<ul class="social_list"> <!-- Liens réseaux sociaux -->
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
					</div>

					<!-- Accès espace client -->

					<div class="user_box ml-auto"> 
					<div class="user_box_login user_box_link"><a href="login.php">S'Identifier</a></div>
					<div class="user_box_register user_box_link"><a href="Nouveau_Membre.php">Créer un compte</a></div>
					</div>
				</div>
			</div>	
		</div>

		<!-- Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
						<div class="logo"><a href="index.php"><img src="images/logo.png" alt="">DO trips</a></div>	
					<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">Packs</a></li>
								<li class="main_nav_item"><a href="about.html">Catégories</a></li>
								<li class="main_nav_item"><a href="contact.html">Contact</a></li>
									<li class="main_nav_item"><a href="products.php">Boutique</a></li>
								<?php
									session_start();
									/* ici débute la session*/ 
									if (isset($_SESSION["access_level"]))
										echo '<li class="main_nav_item"><a href="logout.php">Déconnexion</a></li>';
									{
										if ($_SESSION["access_level"] == '1') /* on établit un niveau d'accès pour créer le back office, ici l'administrateur possède le niveau d'accès 1 */
										{
											echo '<li class="main_nav_item"><a href="contact.html">Admin</a></li>';
											
										}
										else
										{
											/* N'affiche pas l'onglet ADMIN si l'utilisateur ne possède pas le niveau d'accès 1 */
										} 
									}
								?>
							</ul>
					</div>
				</div>
			</div>
		</nav>

	</header>
<body>
	<div class="title1">
	<h6>PARTIE ADMINISTRATEUR</h6>
	</div>
    	<section>
	<div class="admin">
<FORM action="" method="post">
	<table>
		<tr>
			<td><label> AJOUTER UN ADMINISTRATEUR </label></td>
			<td><input type="text" name="add_user"/></td>
			 <tr>
			<td></td>
			<td><input type="submit" name= "AJOUTER" value="AJOUTER ADMIN"/></td>
		</tr>
		</tr>
		</tr>
		<tr>
			<td><label> SURRPIMER UN UTILISATEUR </label></td>
			<td><input type="text" name="delete_user"/></td>
			 <tr>
			<td></td>
			<td><input type="submit" name= "SUPPRIMER" value="SUPPRIMER"/></td>
		</tr>
		</tr>
		</tr>
		<tr>
			<td><label> AJOUTER UN PRODUIT: </label></td>
			<td><input type="text" name="add_product"/></td>
			 <tr>
			<td></td>
			<td><input type="submit" name= "AJOUTER" value="AJOUTER"/></td>
		</tr>
		</tr>
		</tr>
		<tr>
			<td><label> MODIFIER UN PRODUIT</label></td>
			<td><input type="text" name="update_product"/></td>
			<tr>
			<td></td>
			<td><input type="submit" name= "MODIFIER" value="MODIFIER"/></td>
		</tr>
		</tr>
		<tr>
			<td><label> SUPPRIMER UN PRODUIT </label></td>
			<td><input type="text" name="delete_product"/></td>
			<tr>
			<td></td>
			<td><input type="submit" name= "SUPPRIMER" value="SUPPRIMER"/></td>
		</tr>
		</tr>
		<tr>
			<td><label> AJOUTER UNE CATEGORIE </label></td>
			<td><input type="text" name="add_cat"/></td>
			<tr>
			<td></td>
			<td><input type="submit" name= "AJOUTER" value="AJOUTER"/></td>
		</tr>
		</tr>
		<tr>
			<td><label> MODIFIER UNE CATEGORIE </label></td>
			<td><input type="text" name="update_cat"/></td>
			<tr>
			<td></td>
			<td><input type="submit" name= "MODIFIER" value="MODIFIER"/></td>
		</tr>
		</tr>
		<tr>
			<td><label> SUPPRIMER UNE CATEGORIE </label></td>
			<td><input type="text" name="delete_cat"/></td>
			<tr>
			<td></td>
			<td><input type="submit" name= "SUPPRIMER" value="SUPPRIMER"/></td>
		</tr>
		</tr>
		
	</table>
</FORM>
</div>
</section>

<?php 

if(isset ($_POST["AJOUTER ADMIN"]))
{
	$query = $add_user->query("INSERT INTO membre(pseudo_membre,mdp_membre,access_level) VALUES (:pseudo_membre, PASSWORD(:mdp_membre),:1)");

}





 ?>
</body>
</html>