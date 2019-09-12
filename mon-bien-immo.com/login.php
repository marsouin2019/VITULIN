<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon évaluation - VITULIN Nicolas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

 <?php
    include("../mon-bien-immo.com/includes/navigation.php");
 ?>

  <?php
    include("../mon-bien-immo.com/includes/header.php");
  ?>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form method="POST" action="./traitement.php" id="frmRegister">
          <div class="form-group">
              <label for="">Email address</label>
              <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Entrez votre adresse mail(*)" name="frmEmail" required>
              <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
          </div>
          <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" id="frmPass" placeholder="Entrez votre mot de passe(*)" name="frmPass" required>
              <small id="passwordHelp" class="form-text text-muted">Ce champ est obligatoire</small>
          </div>
                        
          <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <?php
    include("../mon-bien-immo.com/includes/footer.php");
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/mon-bien-immo.com/js/secure.js"></script>

</body>

</html>
