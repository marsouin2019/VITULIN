<form action="traitement.php" method="POST" id="frmUpdate" class="text-center border border-light p-5">

<p class="h4 mb-4">Modifier votre profil</p>

<!-- E-mail -->
 <!--<div class="form-group">

    <select id="civilite" name="civilite" class="form-control" readonly>
            <option value="M">M</option>
            <option value="Mme">Mme</option>
    </select>
</div> -->
<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom..." value="<?php echo $_SESSION["nom"]?>">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom..." value="<?php  echo $_SESSION["prenom"]?>">
    </div>
</div>


<!-- E-mail -->
<input type="text" id="username" name="username" class="form-control mb-4" placeholder="Pseudo"  value="<?php echo $_SESSION["username"]?>" readonly>


<!-- E-mail -->
<input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail"  value="<?php  echo $_SESSION["email"]?>" readonly>



<div class="form-row mb-4">
    <div class="col">
        <!-- Adresse -->
        <input type="text" id="adress" name="adress" class="form-control" placeholder="Adresse"  value="<?php echo $_SESSION["adress"]?>">
    </div>
    <div class="col">
        <!-- Code Postal -->
        <input type="text" id="codepostal" name="codepostal" class="form-control" placeholder="Code Postal"  value="<?php echo $_SESSION["codepostal"]?>"> 
    </div>
</div>
<!-- Adressc -->
<input type="text" id="adressc" name="adressc" class="form-control mb-4" placeholder="Adresse complémentaire"  value="<?php echo $_SESSION["adressc"]?>">

<!--telephone-->
<input type="phone" id="telephone" name="telephone" class="form-control mb-4" placeholder="Numéro de téléphone"  value="<?php echo $_SESSION["telephone"]?>">


<!-- Ville -->
<input type="text" id="ville" name="ville" class="form-control mb-4" placeholder="Ville"  value="<?php echo $_SESSION["ville"]?>">


<div class="form-group">
    <label>Pays</label><br>
    <select name="pays" id="pays" class="form-control" >
            <option value="1" <?php  if($_SESSION["idpays"] == 1) {echo "selected" ;}  ?>>Martinique</option>
            <option value="2" <?php  if($_SESSION["idpays"] == 2) {echo "selected" ;}  ?>>Guadeloupe</option>
    </select>
</div>


<button type="button" class="btn btn-danger">Annuler</button>
<!-- <button type="submit" class="btn btn-success" name="frmForm" value="frmUpdate">Mettre à jour</button> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Mettre a jour 
</button>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voulez-vous mettre à jour votre profil ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cliquez sur le bouton ci-dessous pour confirmer
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-primary" name="frmForm" value="frmUpdate">Confirmer</button>
      </div>
    </div>
  </div>
</div>
</form>