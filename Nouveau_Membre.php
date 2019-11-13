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
									if (isset($_SESSION["access_level"]))
                                    {
										echo '<li class="main_nav_item"><a href="logout.php">Déconnexion</a></li>';


										if ($_SESSION["access_level"] == '1')
										{
											echo '<li class="main_nav_item"><a href="contact.html">Admin</a></li>';
										}
										else
										{
											/* Nothing to do */
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
	<h6>Créer un compte</h6>
	</div>
    	<section>
	<div class="inscription">
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
			<td><label>Confirmation du mot de passe : </label></td>
			<td><input type="password" name="passe2"/></td>
		</tr>
		<tr>
			<td><label>Nom : </label></td>
			<td><input type="text" name="nom"/></td>
		</tr>
		<tr>
			<td><label>Prenom : </label></td>
			<td><input type="text" name="prenom"/></td>
		</tr>
		<tr>
			<td><label>Date de naissance : </label></td>
			<td><input type="date" name="dateN"/></td>
		</tr>
		<tr>
			<td><label>Adresse : </label></td>
			<td><input type="text" name="adresse"/></td>
		</tr>
		<tr>
			<td><label>Code postal : </label></td>
			<td><input type="text" name="codepostal"/></td>
		</tr>
		<tr>
			<td><label>Ville : </label></td>
			<td><input type="text" name="ville"/></td>
		</tr>
		<tr>
			<td><label>Adresse e-mail: </label></td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submitForm" value="M'inscrire"/></td></tr>
		</tr>
	</table>
</FORM>


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



/* Initialize connexion to database */
$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);

if (isset($_POST["submitForm"]))
{
	extract($_POST);
	if (!empty($passe)&& !empty($passe2)&& !empty($pseudo)&& !empty($nom)&& !empty($prenom) &&!empty($dateN)&& !empty($adresse)&& !empty($codepostal)&& !empty($ville)&& !empty($email))
	{
		if ($passe==$passe2)
		{
			$c=$connexion->prepare("SELECT pseudo_membre FROM membre WHERE pseudo_membre=:pseudo_membre");
			$c->execute(['pseudo_membre'=> $pseudo]);
			$result = $c->rowCount();
			if ($result == 0)
			{
				$c = $connexion->prepare("INSERT INTO membre(pseudo_membre,mdp_membre,nom_membre,prenom_membre,dateN_membre,adr_membre,cp_membre,ville_membre,email_membre,access_level) VALUES (:pseudo_membre, PASSWORD(:mdp_membre), :nom_membre, :prenom_membre, :dateN_membre, :adr_membre, :cp_membre, :ville_membre, :email_membre, 0)");
				$c->execute([
					'pseudo_membre'=>$pseudo,
					'mdp_membre'=>$passe,
					'nom_membre'=>$nom,
					'prenom_membre'=>$prenom,
					'dateN_membre'=>$dateN,
					'adr_membre'=>$adresse,
					'cp_membre'=>$codepostal,
					'ville_membre'=>$ville,
					'email_membre'=>$email,
				]);
				echo "Votre inscription a bien été effectuée ";
			}
			else
			{
				echo " ATTENTION : Ce pseudo existe déjà";
			}
		}
		else
		{
			echo "ERREUR : Les mots de passes ne correspondent pas";
		}
	}
	else
	{
	echo "ERREUR : Les champs requis doivent être remplis ";
	}
}


?>
</div>
</section>

</body>
</html>