<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EasyQuete</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>


<header class="section-header">
	<section class="header-top-light border-bottom">
	  <div class="container">
	    <a href="index.php" > <img class="logo" src="img/easyquete.png" alt="logo"> </a>
	  </div>
	</section>
	<div class="container-fluid">
		<div class="col-12">
			<div class="row">
				<div class="col-5">
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
				        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mon Compte</a>
				            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-108px, 42px, 0px);">
									<form class="px-4 py-3">
										<div class="form-group">
										  <label>Adresse mail</label>
										  <input type="email" class="form-control" placeholder="email@example.com">
										</div>
										<div class="form-group">
										  <label>Mot de passe</label>
										  <input type="password" class="form-control" placeholder="Password">
										</div>
										<button type="submit" class="btn btn-primary">Se connecter</button>
										</form>
										<hr class="dropdown-divider">
										<a class="dropdown-item" href="#">Pas encore inscrit ? Cliquez ici !</a>
										<a class="dropdown-item" href="#">Mot de passe oublié ?</a>
								</div> <!--  dropdown-menu .// -->
				        </li>
				        

      				</ul> <!-- navbar-nav.// -->
				</div>
					<div class="col-7">
					<form action="#" >
						<div class="input-group w-100">
						    <input type="text" class="form-control" style="width:55%;" placeholder="Rechercher">
						    <select class="custom-select" name="category_name">
									<option value="">Tout</option>
									<option value="comments">Hommes</option>
									<option value="content">Femmes</option>
									<option value="content">Enfants</option>
									<option value="content">Garçons</option>
									<option value="content">Filles</option>
									<option value="content">Bébé</option>
							</select>
						    <button class="btn btn-primary" type="submit">
						        <i class="fa fa-search"></i>
						    </button>
					    </div>
					</form> <!-- search-wrap .end// -->
				</div>
				
				</div>
			</div>
		
		</div> <!-- col.// -->
		<div class="category">
			<nav class="navbar navbar-expand-md navbar-light bg-light">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNavDropdown">
			        <ul class="navbar-nav">
			            <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="bonnes_affaires.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bonnes affaires </a>
			                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    <li><a class="dropdown-item" href="bonnes_affaires.php">Action</a></li>
			                    <li><a class="dropdown-item" href="#">Another action</a></li>
			                </ul>
			            </li>
			           <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Nouveautés </a>
			                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    <li><a class="dropdown-item" href="#">Action</a></li>
			                    <li><a class="dropdown-item" href="#">Another action</a></li>
			                    
			                </ul>
			            </li>
			            <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="homme.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hommes </a>
			                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    <li><a class="dropdown-item" href="#">Action</a></li>
			                    <li><a class="dropdown-item" href="#">Another action</a></li>
			                    
			                </ul>
			            </li>
			             <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Femmes </a>
			                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    <li><a class="dropdown-item" href="#">Action</a></li>
			                    <li><a class="dropdown-item" href="#">Another action</a></li>
			                    
			                </ul>
			            </li>
			             <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Enfants </a>
			                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    <li><a class="dropdown-item" href="#">Action</a></li>
			                    <li><a class="dropdown-item" href="#">Another action</a></li>
			                    
			                </ul>
			            </li>
			            
			        </ul>

                       <a href="panier.php" ><img src="img/icons8-panier-2-32.png" alt="" srcset="">Panier</a> 
                   <a href="total_reservation.php"><img src="img/icons8-box-64.png" alt="" srcset="" width="40px">Vos commandes</a> 
			    </div>
			</nav>
		</div>
</header> <!-- section-header.// -->