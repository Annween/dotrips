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

<?php
/* Set server path */
$PARAM_hote='localhost';
/* Set server port */
$PARAM_port='3306';
/* Set database name */
$PARAM_nom_bd='eboutique';
/* Connect as root */
$PARAM_utilisateur='root';
/* No password */
$PARAM_mot_passe='';

session_start();

/* Initialize connexion to database */
$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);


/* Is it a return from login form? */
if (isset($_POST["pseudo"]) && isset($_POST["passe"]))
{
	/* Select all data from database where login info match */
	$query = $connexion->query("SELECT * FROM membre WHERE pseudo_membre='".$_POST["pseudo"]."' AND mdp_membre=PASSWORD('".$_POST["passe"]."')");
	/* Get number of result returned by this request */
	/* Is at least one user found? */
	if ($query->rowCount() >= 1)
	{
		$firstRow = $query->fetch();
		echo "Utilisateur trouvé avec le niveau d'accès :  ".$firstRow['access_level'];

		$_SESSION["access_level"] = $firstRow['access_level'];
		$_SESSION["total_product"] = 0;
		$_SESSION["total_price"] = 0;
	}
	else
	{
		echo "Utilisateur inconnu";
	}
}
?>



<div class="super_container">
	
	<!-- Header -->

	<header class="header">

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
							<?php
							/* on créé un session pour enregistrer les données de l'utilisateur*/
							if (isset($_SESSION["access_level"]))
							{
								echo "<div class='user_box_login user_box_link'><a href='panier.php'>Mon panier</a></div>";
								echo "<div class='user_box_login user_box_link'><a href='logout.php'>Déconnexion</a></div>";
							}
							else
							{
								echo "<div class='user_box_login user_box_link'><a href='login.php'>S'Identifier</a></div>";
								echo "<div class='user_box_register user_box_link'><a href='Nouveau_Membre.php'>Créer un compte</a></div>";
							}
							?>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!--Navigation -->

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
								/* SESSION ADMINISTRATEUR : Visible uniquement pour les utilisateurs ayant le niveau d'accès 1 */
									if (isset($_SESSION["access_level"]))
										
									{
										if ($_SESSION["access_level"] == '1')
										{
											echo '<li class="main_nav_item"><a href="admin.php">Admin</a></li>';
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
			</div>
		</nav>
</header>
<body>
	<div class="titre">
	<h6>Se connecter</h6>
	</div>
    	<section>
	<div class="login">
<FORM action="" method="post">
	<table>
		<tr>
			<td><label>Pseudo : </label></td>
			<td><input type="text" name="pseudo"/></td>
		</tr>
		<tr>
			<td><label>Mot de passe : </label></td>
			<td><input type="password" name="passe"/></td>
		</tr>
	
		<tr>
			<td></td>
			<td><input type="submit" value="Connexion"/></td>
		</tr>
	</table>
</FORM>
</div>
</section>

</body>
</html>