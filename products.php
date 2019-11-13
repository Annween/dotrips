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
?>



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
							<?php
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

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="index.php"><img src="images/logo.png" alt="">DO trips</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Accueil</a></li>
								<li class="main_nav_item"><a href="about.php>">A Propos</a></li>
								<li class="main_nav_item"><a href="contact.php">Contact</a></li>
								<li class="main_nav_item"><a href="products.php">Boutique</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
</header>
<body>
	<div class="titre">
	<h6>Boutique</h6>
	</div>
    	<section>
	<div class="login">
<FORM action="" method="post">
		<?php
		/* Si on est en retour de formulaire d'ajout */
		if (isset($_POST["add_basket"]))
		{
			if (   (empty($_POST["product_nbr"]))
		        || ($_POST["product_nbr"] == "0"))
		    {
				echo "ERREUR : Veuillez saisir la quantité souhaitée ";
		    }
		    else
		   	{
		   		/* Variable temporaire de nombre total d'articles */
				$totalProd = $_SESSION["total_product"];
				/* On ajoute au panier de session l'ID du produit issue du formulaire */
				$_SESSION['panier'][$totalProd]['id_produit'] = $_POST['product'];
				$_SESSION['panier'][$totalProd]['qte_produit'] = $_POST['product_nbr'];

                /* On requete en BDD le prix du produit selectionne */

			    $c = $connexion->prepare("SELECT `prix_produit` FROM `produits` WHERE `nom_produit`='".$_POST['product']."'");
			    $c->execute();
			    $price = $c->fetch();

			    $_SESSION["total_price"] = $_SESSION["total_price"] + ($price['prix_produit'] * $_POST['product_nbr']);

				/* On ajoute 1 au nombre total d'article */
				$_SESSION["total_product"] = $_SESSION["total_product"] + 1;
		   	}
			
		}
		/* Sinon */
		else
		{
			/* On requete en BDD tous les produits */
			$c = $connexion->prepare("SELECT * FROM `produits`");
			$c->execute();
			$i = 0;
			/* Initialisation d'un tableau dynamique */
			echo '<table style="border-style:inset; border-width:1">';
			echo "<thead><tr><th style='width:20%'>id_produit</th><th style='width:20%'>nom_produit</th><th style='width:20%'>prix_produit</th><th style='width:20%'>stock_produit</th><th style='width:20%'>num_cat</th></tr></thead>";
			echo "<tbody>";
			/* Pour chaque produit on dépile la réponse */
			while ($product[$i]=$c->fetch())
			{
				/* Création d'une ligne de tableau par produit */
				echo "<tr>";
					echo "<td>".$product[$i]['id_produit']."</td>";
					echo "<td>".$product[$i]['nom_produit']."</td>";
					echo "<td>".$product[$i]['prix_produit']."</td>";
					echo "<td>".$product[$i]['stock_produit']."</td>";
					echo "<td>".$product[$i]['num_cat']."</td>";
				echo "</tr>";
				$i = $i + 1;
			}
			echo "</tbody>";
			echo "</table>";
			/* Crétation d'une liste déroulante dynamique */
			/* Ici la variable i est le nombre total de produit */
			/* On parcours la liste "en sens inverse" en décrémentant i */
			echo "<SELECT name='product' size='1'>";
			for ($i; $i >= 0; $i--)
			{
				echo "<OPTION value=".$product[$i]['nom_produit'].">".$product[$i]['nom_produit'];
			}
			echo "</SELECT></br>";
			/* Quantite et fin du formulaire */
			echo "Quantite: <input type='text' name='product_nbr'></br>";
			echo "<input type='submit' name='add_basket' value='Ajouter au panier'/>";
		}
		?>
</FORM>
</div>
</section>

</body>
</html>