<doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>EasyQuete inscription</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NKDMSK6');
	</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>



	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="traitement.php" method="POST" id="frmRegister">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Inscrivez-vous</h3>
									
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Profil
											</a>
										</li>
			                            
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Addresse
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Dites-nous en plus à propos de vous.</h5>
											

											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-1">
													<label class="control-label col-sm-2">Civilité <small>*</small> </label>
													<div class="form-group">
														<select id="civilite" name="civilite" class="form-control" required>
															<option value="M" selected>M</option>
															<option value="Mme">Mme</option>
														</select>
													</div>
												</div>
											</div> <!-- /.form-group -->
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Nom <small>*</small></label>
													<input id="lastname" name="lastname" type="text" class="form-control" placeholder="Andrew..."required>
												</div>
												<div class="form-group">
													<label>Prénom <small>*</small></label>
													<input id="firstname" name="firstname" type="text" class="form-control" placeholder="Smith..." required>
												</div>
												<div class="form-group">
													<label>Pseudo <small>*</small></label>
													<input id="username" name="username" type="text" class="form-control" placeholder="..." required>
												</div>
												
												<div class="form-group">
													<label>Mot de passe<small>(8 caractères)*</small></label>
													<input id="password" type="password" name="password" class="form-control" placeholder="Smith..." required>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>*</small></label>
													<input id="email" type="email" name="email" class="form-control" placeholder="easy@gmail.com" required>
												</div>
											</div>
										</div>
		                            </div>
		                         
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                  
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Adresse</label>
		                                            <input type="text" id="adresse" name="adress" class="form-control" placeholder="5h Avenue" required>
												</div>
												<div class="form-group">
		                                            <label>Adresse complémentaire</label>
		                                            <input type="text" id="adressc" name="adressc" class="form-control" placeholder="5h Avenue">
												</div>
												<div class="form-group">
		                                            <label>Téléphone</label>
		                                            <input type="text" id="telephone" name="telephone" class="form-control" placeholder="+596" required>
		                                        </div>
											
		                                         <div class="form-group">
		                                            <label>Ville</label>
		                                            <input type="text" id="ville" name="ville" class="form-control" placeholder="Votre ville..." required>
		                                        </div>

		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Code postal</label>
		                                            <input type="text" id="codepostal" name="codepostal" class="form-control" placeholder="97" required>
		                                        </div>

		                                    </div>
		                                   
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Pays</label><br>
		                                            <select name="pays" id="pays" class="form-control" required>
		                                                <option value="Martinique">Martinique</option>
		                                                <option value="Guadeloupe">Guadeloupe</option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='Suivant' value='Suivant' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='frmForm' value="frmRegister"/>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='Précedent' value='Précédent' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
