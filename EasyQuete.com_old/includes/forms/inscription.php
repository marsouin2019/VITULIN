<form action="traitement.php" method="POST" id="frmRegister" class="text-center border border-light p-5">

    <p class="h4 mb-4">S'inscrire</p>

    <!-- E-mail -->
    <div class="form-group">
    
	    <select id="civilite" name="civilite" class="form-control" required>
				<option value="M" selected>M</option>
				<option value="Mme">Mme</option>
		</select>
	</div>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom...">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom...">
        </div>
    </div>

   
    <!-- E-mail -->
    <input type="text" id="username" name="username" class="form-control mb-4" placeholder="Pseudo">

    <!-- Password -->
    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
    <small id="" class="form-text text-muted mb-4">
        Au moins 8 caractères
    </small>
     <!-- E-mail -->
     <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

    

    <div class="form-row mb-4">
        <div class="col">
            <!-- Adresse -->
            <input type="text" id="adress" name="adress" class="form-control" placeholder="Adresse">
        </div>
        <div class="col">
            <!-- Code Postal -->
            <input type="text" id="codepostal" name="codepostal" class="form-control" placeholder="Code Postal">
        </div>
    </div>
     <!-- Adressc -->
     <input type="text" id="adressc" name="adressc" class="form-control mb-4" placeholder="Adresse complémentaire">

     <!--telephone-->
     <input type="phone" id="telephone" name="telephone" class="form-control mb-4" placeholder="Numéro de téléphone">
     

     <!-- Ville -->
     <input type="text" id="ville" name="ville" class="form-control mb-4" placeholder="Ville">

    <div class="form-group">
		    <label>Pays</label><br>
		    <select name="pays" id="pays" class="form-control" required>
		            <option value="Martinique">Martinique</option>
		            <option value="Guadeloupe">Guadeloupe</option>
		    </select>
	</div>

   

    <!-- Sign up button -->
    <button class="btn btn-info " type="submit" name='frmForm' value="frmRegister">S'inscrire</button>

    <!-- Social register -->

</form>