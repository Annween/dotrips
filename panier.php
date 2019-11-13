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
              <?php
              // Création du panier si n'existe pas dans la session de l'utilisateur
              session_start();
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
                <li class="main_nav_item"><a href="about.html">A Propos</a></li>
                <li class="main_nav_item"><a href="contact.html">Contact</a></li>
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
<?php 
// Voici l'affichage du panier
echo '<h2>Contenu de votre panier</h2><ul>';
/* Si un panier existe et n'est pas vide (a tester) */
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0)
{
  /* On note dans une variable temporaire le nombre total de produit */
  $totalProd = $_SESSION["total_product"];
  /* Initialisation d'une boucle */
  $i = 0;
  /* Pour chaque produit du panier */
  for ($i = 0; $i < $totalProd; $i++)
    {
      /* On "sort" du panier le produit d'index i et on affiche son id */
      echo $_SESSION['panier'][$i]['id_produit']." x ".$_SESSION['panier'][$i]['qte_produit']."</br>";
    }

  echo "Prix total: ". $_SESSION['total_price'];
}
else
{ 
  echo 'Votre panier est vide';
} // Message si le panier est vide
  echo "</ul>";


?>
</div>
</section>

</body>
</html>