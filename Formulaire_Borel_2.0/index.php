<!DOCTYPE html>
<html>
<head>
	<title> formulaire </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="CSS/monstyle.css"> -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<meta name="viewport" content="width-device-width, initial-scale=1. shrink-to-fit=no">
	<style type="text/css">
						.corps{
					color: white;
					background-image:url(Images/7.jpg) ; 
					background-size: cover; background-position: fixed;
				}

				.form1{
					margin-top: 50px;
					margin-bottom: 50px;
					background-color: black;
					height: 700px;
					opacity: 0.7;
				}
				.form2{
					margin-top: 50px;
				}
				.form3{
					margin-top: 50px;
					height: 400px;
				}
				.rad{
					margin-left: 230px!important;
				}
				h3{
					text-align: center;
					margin-top: 50px;
					font-weight: bold;
				}
				.inpt1, .inpt2, .inpt3, .inpt4, .inpt5{
					border-top:none!important;
					border-left:none!important;
					border-right:none!important;
					background-color:transparent!important;
				}

				.inpt7{

					background-color: transparent;
				}
				.sel1, .sel2{
					border-top:none!important;
					border-left:none!important;
					border-right:none!important;
					background-color: transparent;
				}
				.btn{
					background:rgb(119 84 201) ;
					border:none;
					border-radius: 10px;
					box-shadow: 0 2px ;
				}
				
				#pp{
					margin-top: 10px; 
					margin-bottom: 10px;
					height: 120px; 
					width: 120px; 
					border-radius: 50px;
				}

				table{
					color: black!important;
				}
				@media screen and (max-width: 768px){
					.form1{
					margin-top: -40px;
					
					height: 1000px!important;
					opacity: 0.75;
					}
				.corps{
					
					
					background-repeat: no-repeat;
					background-size:cover;
					
				}
				}
				@media screen and (max-width: 1024px){
					.form1{
					margin-top: -40px;
					
					height: 1000px!important;
					opacity: 0.75;
					}
				}

				/*.......................*/
				input:invalid+span:after {
				  content: '✖';
				  color: red;
				  font-size: 12px;
				}


				input:valid+span:after{
				  content: '✓';
				  color: rgb(0, 255, 0);
				  font-weight: bolder;
				  font-size: 12px;
				}

	</style>
	
</head>
<body class="corps">
	<div class="container-fluid ">
		
		<div class="row ">
			<h2></h2>
			<div class=" form1 col-md-offset-2 col-md-8  col-xs-12 col-xm-offset-2 col-xm-10" style="border-radius: 20px; box-shadow: 0px 0px 20px rgba(32, 255, 255, 0.5);">
				<h3>INSCRIVEZ VOUS GRATUITEMENT </h3>
				<h4 class="text-center" style="color: aqua ;"> Rejoindre la plus grande communauté des developpeurs de InchClass</h4>
				<form enctype="multipart/form-data" method="post" action="traitement.php" id="myform" >

					<div class="col-md-5 col-xm-5 col-xs-offset-1 col-xs-11 form2">
							<!-- Noms -->
							<label for="Nom"> <sup style="color: red;">* </sup>Nom : </label>
							<div class="input-group">
								<span Class="input-group-addon essai"><span class="glyphicon glyphicon-user"></span></span>
								<input  class="form-control inputt " type="text" name="Noms" id="Nom" required="" placeholder="Votre Nom" minlength="4" pattern="^[A-Za-z0-9_.]+${3,20}" maxlength="50" title=" saisir votre nom sans caractere special">
								<span class="input-group-addon essai Valid"> <span class="validity " style="background-color: none;"></span> </span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Prenoms -->
							<label for="Prenom"> <sup style="color: red;">* </sup>Prenom : </label>
							<div class="input-group">
								<span Class="input-group-addon essai"><span class="glyphicon glyphicon-user"></span></span>
								<input class="form-control inputt" type="text" name="Prenoms" id="Prenom" required="" placeholder="Votre Prenom" minlength="4" pattern="^[A-Za-z0-9_.]+${3,20}" maxlength="50">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"> </span></span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Date Naissance -->
							<label for="Nom"> <sup style="color: red;">* </sup>Date de Naissance : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-time"></span> </span>
								<input  class="form-control inputt" type="date" name="Date_Naissance" id="Date_Nais" required="" placeholder="Exple: 11 - 08 - 2021" pattern="(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/](19|20)\d\d">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"> </span></span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Email -->
							<label for="Email"> <sup style="color: red;">* </sup>E-mail : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-envelope"> </span> </span>
								<input class="form-control inputt" type="email" name="Email" id="Email" required="" placeholder="Example@example.com" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Mot de passe -->
							<label for="Tel"> <sup style="color: red;">* </sup>PassWord : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-lock"> </span> </span>
								<input class="form-control inputt" type="PassWord" name="Pswd" id="Pswd" required="" minlength="5" title="Entrer un mot de passe d'au moins 5 caracteres">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>
							
							
					</div>

					<div class="col-md-offset-1 col-md-5 col-md-pull-1 col-xm-5 col-xs-offset-1 col-xs-11 form3">
							<!-- Telephone -->
							<label for="Tel"> <sup style="color: red;">* </sup>Numéro Tel : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-earphone"></span> </span>
								<input class="form-control inputt" type="tel" name="Telephone" id="Tel" required="" placeholder="Numero de tel" pattern="[0-9]+" minlength="9" maxlength="20">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Choix pays -->
							<label for="Nationalite"> <sup style="color: red;">* </sup>Choix du Pays : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-flag"></span> </span>
								<select id="Nationalite" class="form-control inputt" name="Pays" required="" >
						      <option value="" selected="selected" disabled="" style="background-color: rgb(180, 180, 180);"> choisir votre pays d'origine </option>
						      <option value="camerounaise"> cameroun </option>
						      <option value="gabonaise"> sénégal </option>
						      <option value="congolaise"> congo </option>
						      <option value="marocaine"> maroc </option>
						      <option value="ivoirienne"> Cote_ivoire </option>
						      <option value="Tunisienne"> Tunisie </option>
						      <option value="Egyptienne"> Egypte </option>
						    </select>
								<!-- <span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span> -->
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Sexe -->
							<label> <sup style="color: red;">* </sup>Sexe : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="fa fa-transgender"></span> </span>
								<select id="Sexe" class="form-control inputt" name="Sexe" required="" >
									<option value="" selected="selected" disabled="" style="background-color: rgb(180, 180, 180);"> choisir votre sexe </option>
									<option class="form-control" value="femme">Femme</option>	
									<option class="form-control" value="homme">Homme</option>	
								</select>
								<!-- <span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span> -->
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>

							<!-- Photo profil -->
							<label for="photo" ><sup style="color: red;">* </sup>Ajoutez Votre photo (.png, .jpeg, .jpg | 100 Mo ) <br></label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-picture"></span> </span>
								<input class="form-control inputt" type="file" id="photo" name="Photo_Profil" accept="image/*" onchange="loadFile(event)" required=""/><br>
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
							<p class="al" style="color:red;"> Veillez Remplir le champ ci dessus </p>
							<div class="col-md-offset-4 col-md-4 im" style=" margin-left: 180px;">
                <img id="pp">
          		</div>
					</div>

					<div class="col-md-offset-5 col-md-2 col-xm-5 col-xs-6">
						<input id="Clear" class="btn btn-danger " type="reset" value="ANNULER" style="margin-bottom: 20px !important;"> 
					</div>

					<div class=" col-md-4 col-xm-5 col-xs-6">
						<input id="Send" class="btn btn-success " type="submit" value="CREER">
					</div>

				</form>		
			</div>
		</div>
		
	</div>
	</body>
	<script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var loadFile = function(event) {
        var profil = document.getElementById('pp');
        profil.src = URL.createObjectURL(event.target.files[0]);
      };

    var cpt = 0;
		var Message_erreur = document.getElementsByClassName('al');
		var Etoile_erreur = document.getElementsByTagName('sup');
		var Valid = document.getElementsByClassName('Valid');
		var Send = document.getElementById('Send');
		var Zone = document.getElementsByTagName('input');
		var pays = document.getElementById('Nationalite');
		var formulaire = document.getElementsByTagName('form');
		var Clear = document.getElementById('Clear');
		console.log(Zone);

    // previsualisation image dans formulaire
		var loadFile = function(event) {
    var profil = document.getElementById('pp');
      profil.src = URL.createObjectURL(event.target.files[0]);
    };


		// Masquage Message erreur
		function Masque() {	
			for (var i = Message_erreur.length - 1; i >= 0; i--) {
			  Message_erreur[i].style.opacity = '0';
			}

			for (var i = Etoile_erreur.length - 1; i >= 0; i--) {
				Etoile_erreur[i].style.opacity = '0';
			}

			for (var i = Valid.length - 1; i >= 0; i--) {
				Valid[i].style.opacity = '0';
			}

		}
		Masque();


		// Detection Appui Boutton Send
		Send.addEventListener('click' , function(){
			for (var i = Zone.length - 1; i >= 0; i--) {
				if (Zone[i].value == 0 || pays.value == "disabled" ) {
					Message_erreur[i].style.opacity = '1';
					cpt+=1;
				}

				if (cpt != 0) {
					formulaire.submit();
					break;
				}
			}
		})


		// Detection appui sur Clear
		Clear.addEventListener('click' , function(){
			Masque();
		})

		// Evenement sur nom
		Zone[0].addEventListener('blur' , function(){
			Valid[0].style.opacity = '1';
			if (Zone[0].value == 0 || Zone[0].value == "disabled" ) {
					Message_erreur[0].style.opacity = '1';
					Etoile_erreur[0].style.opacity = '1';
					Zone[0].style.boxShadow = '0px 0px 5px red';
					Zone[0].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[0].style.opacity = '0';
					Etoile_erreur[0].style.opacity = '0';
					Zone[0].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[0].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur prenom
		Zone[1].addEventListener('blur' , function(){
			Valid[1].style.opacity = '1';
			if (Zone[1].value == 0 || Zone[0].value == "disabled" ) {
					Message_erreur[1].style.opacity = '1';
					Etoile_erreur[1].style.opacity = '1';
					Zone[1].style.boxShadow = '0px 0px 5px red';
					Zone[1].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[1].style.opacity = '0';
					Etoile_erreur[1].style.opacity = '0';
					Zone[1].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[1].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur Date Naissance
		Zone[2].addEventListener('blur' , function(){
			Valid[2].style.opacity = '1';
			if (Zone[2].value == 0 || Zone[2].value == "disabled" ) {
					Message_erreur[2].style.opacity = '1';
					Etoile_erreur[2].style.opacity = '1';
					Zone[2].style.boxShadow = '0px 0px 5px red';
					Zone[2].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[2].style.opacity = '0';
					Etoile_erreur[2].style.opacity = '0';
					Zone[2].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[2].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur Num telephone
		Zone[5].addEventListener('blur' , function(){
			Valid[5].style.opacity = '1';
			if (Zone[5].value == 0 || Zone[5].value == "disabled" ) {
					Message_erreur[5].style.opacity = '1';
					Etoile_erreur[5].style.opacity = '1';
					Zone[5].style.boxShadow = '0px 0px 5px red';
					Zone[5].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[5].style.opacity = '0';
					Etoile_erreur[5].style.opacity = '0';
					Zone[5].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[5].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur Email
		Zone[3].addEventListener('blur' , function(){
			Valid[3].style.opacity = '1';
			if (Zone[3].value == 0 || Zone[3].value == "disabled" ) {
					Message_erreur[3].style.opacity = '1';
					Etoile_erreur[3].style.opacity = '1';
					Zone[3].style.boxShadow = '0px 0px 5px red';
					Zone[3].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[3].style.opacity = '0';
					Etoile_erreur[3].style.opacity = '0';
					Zone[3].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[3].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur password
		Zone[4].addEventListener('blur' , function(){
			Valid[4].style.opacity = '1';
			if (Zone[4].value == 0 || Zone[4].value == "disabled" ) {5
					Message_erreur[4].style.opacity = '1';
					Etoile_erreur[4].style.opacity = '1';
					Zone[4].style.boxShadow = '0px 0px 5px red';
					Zone[4].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[4].style.opacity = '0';
					Etoile_erreur[4].style.opacity = '0';
					Zone[4].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[4].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur pays
		Zone[8].addEventListener('blur' , function(){
			Valid[6].style.opacity = '1';
			if (Zone[8].value == 0 || pays.value == "disabled" ) {
					Message_erreur[6].style.opacity = '1';
					Etoile_erreur[7].style.opacity = '1';
					Zone[8].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[6].style.opacity = '0';
					Etoile_erreur[7].style.opacity = '0';
					Zone[8].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})


		// Evenement sur image
		Zone[6].addEventListener('change' , function(){
			Valid[6].style.opacity = '1';
			if (Zone[6].value == 0 || pays.value == "disabled" ) {
					Message_erreur[8].style.opacity = '1';
					Etoile_erreur[8].style.opacity = '1';
					Zone[6].style.boxShadow = '0px 0px 5px red';
					Zone[6].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[8].style.opacity = '0';
					Etoile_erreur[8].style.opacity = '0';
					Zone[6].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[6].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

	</script>

</html>