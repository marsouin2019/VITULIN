<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EasyQuete</title>


    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mdb.css">
	<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>


<nav class="navbar navbar-dark default-color justify-content-between">
  <a class="navbar-brand" href="#"></a>
  <ul class="nav">
						<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Langues</a>
				            <ul class="dropdown-menu dropdown-menu-right">
								<li><a class="dropdown-item" href="#">Anglais</a></li>
								<li><a class="dropdown-item" href="#">Arabe</a></li>
								<li><a class="dropdown-item" href="#">Russe</a></li>
				            </ul>
				        </li>
						<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Devise</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a class="dropdown-item" href="#">EUR</a></li>
								<li><a class="dropdown-item" href="#">USD</a></li>
								<li><a class="dropdown-item" href="#">RUBL </a></li>
				            </ul>
						</li>
				        
				        <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
				        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="img/nom-50.png" alt="" srcset="" width="30px" >   Mon Compte</a>
				            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-108px, 42px, 0px);">
                  <?php

                      if(isset($_SESSION["prenom"]) != "")
                      {
                          echo "<p>Bienvenue ".$_SESSION["prenom"]." </p>";
                      } else {

                     
                    ?>
                    <form class="px-4 py-3" method="POST" action="traitement.php" name="frmRegister">
										<div class="form-group">
										  <label>Adresse mail</label>
										  <input type="email" class="form-control" placeholder="email@example.com" name="email">
										</div>
										<div class="form-group">
										  <label>Mot de passe</label>
										  <input type="password" class="form-control" placeholder="Password" name="password">
										</div>
                    <button type="submit" class="btn btn-primary" name="frmForm" value="frmLogin">Se connecter</button>
										<
                    
										</form>
										<hr class="dropdown-divider">
										<a class="dropdown-item" href="inscription.php">Pas encore inscrit ? Cliquez ici !</a>
                    <a class="dropdown-item" href="forget_password.php">Mot de passe oublié ?</a>
                    <?php
                     }
                     ?>
                     
								</div> <!--  dropdown-menu .// -->
                </li>
                <a href="logout.php"><button type="submit" class="btn btn-primary" action="">Se déconnecter</button></a> 

  <form class="form-inline my-1">
    <div class="md-form form-sm my-0">
      <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search"
        aria-label="Search">
    </div>
    <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
  </form>
</nav>









<header class="section-header">
	<section class="header-top-light border-bottom">
	  <div class="container">
	    <a href="index.php" > <img class="logo"  src="img/easyquete.png" alt="logo"> </a>
	  </div>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="article.php">Promo
          <span class="sr-only">(current)</span>
        </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Bonnes affaires
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
		<a class="dropdown-item" href="homme.php">Hommes</a>
          <a class="dropdown-item" href="femme.php">Femmes</a>
		  <a class="dropdown-item" href="enfants.php">Enfants</a>
		  
        </div>
	  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Nouveautés
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="homme.php">Hommes</a>
          <a class="dropdown-item" href="femme.php">Femmes</a>
		  <a class="dropdown-item" href="enfants.php">Enfants</a>
		  
        </div>
	  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Hommes
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Nouveautés</a>
          <a class="dropdown-item" href="#">Bas</a>
		  <a class="dropdown-item" href="#">Survêtement et Veste</a>
		  <a class="dropdown-item" href="#">Hauts et Ensembles</a>
          <a class="dropdown-item" href="#">Mariages et événements</a>
          <a class="dropdown-item" href="#">Accessoires</a>
        </div>
	  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Femmes
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
		<a class="dropdown-item" href="#">Nouveautés</a>
          <a class="dropdown-item" href="#">Bas</a>
		  <a class="dropdown-item" href="#">Survêtement et Veste</a>
		  <a class="dropdown-item" href="#">Hauts et Ensembles</a>
          <a class="dropdown-item" href="#">Mariages et événements</a>
          <a class="dropdown-item" href="#">Accessoires</a>
        </div>
	  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Enfants
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="garcons.php">Garçons</a>
          <a class="dropdown-item" href="filles.php">Fille</a>
          <a class="dropdown-item" href="bebe.php">Bébé</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      <li class="nav-item">
	  <a href="total_reservation.php"><img src="img/icons8-box-64.png" alt="" srcset="" width="40px">Vos commandes</a>
      </li>
      <li class="nav-item dropdown">
        
		  <a href="panier.php" ><img src="img/icons8-panier-2-32.png" alt="" srcset="">Panier</a> 
        </a>
       
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

















	</section>
	
				        

      				</ul> <!-- navbar-nav.// -->
				</div>
					
</header> <!-- section-header.// -->