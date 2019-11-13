
HTML Lint (v2.0.0)
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
						<div class="logo"><a href="index.html"><img src="images/logo.png" alt="">DO trips</a></div>	
					<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.html">Packs</a></li>
								<li class="main_nav_item"><a href="categories.html">Catégories</a></li>
								<li class="main_nav_item"><a href="contact.html">Contact</a></li>
								<li class="main_nav_item"><a href="products.html">Boutique</a></li>
							</ul>
					</div>
				</div>
			</div>
		</nav>

	</header>

<!-- Accueil -->

<div class="home">

<div class="promo_box">
		<div class="promo_text">Choisissez votre prochain voyage parmi nos catégories...</div>
	</div>
	</div>
	</div>	

	<!-- Packs 1 -->

<div class="pack">
	<div class="pack_box">
		<div id="pack_box_items">
			<div class="pack_box_background" style="background-image: url(images/usa.jpg);"></div>
			<div class="pack_date">Voyagez aux</div>
			<div class="pack_name">
				<h1>Etas-Unis</h1>
				<div class="pack_price">A Partir de 2000€</div>
			</div>
				<div class="pack_button_text">Regardez les Villes<a href="products.php"><span></span><span></span><span></span></a>
				</div>
		</div>
	</div>

	<!-- Packs 2 -->

		<div class="pack_box_2">
		<div id="pack_box_items">
			<div class="pack_box_background" style="background-image: url(images/france.jpg);"></div>
			<div class="pack_date">Voyagez en</div>
			<div class="pack_name">
				<h1>France</h1>
				<div class="pack_price">A Partir de 500€</div>
			</div>
				<div class="pack_button_text">Regardez les Villes<a href="products.php"><span></span><span></span><span></span></a>
				</div>
		</div>
	</div>

	<!-- Packs 3 -->

		<div class="pack_box_3">
		<div id="pack_box_items">
			<div class="pack_box_background" style="background-image: url(images/uk.jpg);"></div>
			<div class="pack_date">Voyagez en</div>
			<div class="pack_name">
				<h1>Grande-Bretagne</h1>
				<div class="pack_price">A Partir de 1000€</div>
			</div>
				<div class="pack_button_text">Regardez les Villes<a href="products.php"><span></span><span></span><span></span></a>
				</div>
		</div>
			</div>

		</div>

</div>

<!-- Pied de page | Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">

			<!-- Colonnes de pied de page | Footer Column -->
			<div class="col-lg-3 footer_column">
				<div class="footer_col">
					<div class="footer_content footer_about">
						<div class="logo_container footer_logo">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Do Trips</a></div>
							</div>
							<p class="footer_about_text"> Venez découvrir le monde avec nous!</p>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="footer_column">
					<div class="footer_col">
						<div class="footer_title">contact</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<div class="contact_info_item d-flex flex-row">
									<div class="contact_info_text">9 Rue des Roses 75018 FRANCE</div>
								</div> 
								<div class="contact_info_item d-flex flex-row">
									<div class="contact_info_text"><a href="mailto:contact@dotrips.fr?Subject=Hello" target="_top">contact@dotrips.fr</a></div>
								</div>
							</ul>
						</div>
					</div>
				</div>
				  	<div class="search-container">
    					<form action="/action_page.php">
      					<input type="text" placeholder="Recherche.." name="search">
     					 <button type="submit"><i class="fa fa-search"></i></button>
    				</form>
 				 </div>
		</div>	
	</div>
	
</footer> 

</div>

</body>

</html>