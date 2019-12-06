<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Full Width Pics - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>
 <?php
  include("includes/navigation.php");
?>
  <!-- Header - set the background image for the header in the line below -->
  <?php
  include("includes/header.php");
  $_SESSION = array();

  session_destroy();

  print_r($_SESSION);
?>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Register</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    <form method="POST" action="traitement.php" id="frmRegister">
        <div class="form-group">
        <label for="civilite">Civilité</label>
        <select class="form-control" id="frmCivilite" name="frmCivilite" required>
            <option value="M" selected>M</option>
            <option value="Mme">Mme</option>
        </select>
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquer nom (*)" name="frmNom" required>
            <small id="nomHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Prenom</label>
            <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquer prenom (*)" name="frmPrenom" required>
            <small id="prenomHelp" class="form-text text-muted"></small>
        </div>
        
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" class="form-control" id="frmAddress" aria-describedby="" placeholder="Indiquer adresse(*)" name="frmAddress" required>
            <small id="addressHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Complementaire</label>
            <input type="text" class="form-control" id="frmComplementaire" aria-describedby="" placeholder="Indiquer adresse(*)" name="frmComplementaire" required>
            <small id="addressHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Postal</label>
            <input type="text" class="form-control" id="frmPostal" aria-describedby="" placeholder="Indiquer adresse(*)" name="frmPostal" required>
            <small id="addressHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Ville</label>
            <input type="text" class="form-control" id="frmVille" aria-describedby="" placeholder="Indiquer adresse(*)" name="frmVille" required>
            <small id="addressHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="text" class="form-control" id="frmTelephone" aria-describedby="" placeholder="Indiquer email(*)" name="frmTelephone" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="mail" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmEmail" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="frmPass" aria-describedby="" placeholder="Rentrer un mot de passe" name="frmPassword" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

  
        <input type="submit" value ="frmRegister" name="frmForm" class="btn btn-primary">
        
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
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      
    </div>
  </section>

  <?php
  include("includes/footer.php");
?>
