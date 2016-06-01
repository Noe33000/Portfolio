
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Début portfolio</title>

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="navbar-fixed-top.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Mon CSS -->

		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Portfolio</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="js-scrollTo" href="#top">Introduction</a></li>
						<li><a class="js-scrollTo" href="#partie2">Compétences</a></li>
						<li><a class="js-scrollTo" href="#partie3">Formulaire</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div id="partie1"></div>
		<div class="container">
			<div id="wrapper1">
			<h1 id="title1" class="text-center">Introduction</h1>
			 <p id="text-part1">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis ligula eget volutpat euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla pellentesque ipsum lacus, eu fringilla nulla elementum in. Nam id pellentesque dui. Aliquam gravida faucibus neque, id euismod purus commodo vel. Cras et ligula quis tortor commodo tristique. Phasellus viverra mauris a gravida interdum. Nam sed dignissim nisl. Morbi imperdiet turpis nisl, sed venenatis felis dapibus non. 
			 </p>
			 	<div id="btn-part1" class="row text-center">
				 <div class="col-xs-4"></div>
				 <div class="col-xs-4">
				 		<a class="js-scrollTo" href="#partie3" class="text-center">
							<button class="btn btn-success text-center">Lien vers le formulaire</button>
						</a>
				 </div>
				 <div class="col-xs-4"></div>
			 	</div>
			</div> <!-- Fin Wrapper 1 -->

			<div id="partie2"></div>
			<div id="wrapper2" class="row text-center">
				<h1>Compétences</h1>
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<h3>HTML</h3>
					<img class="cols-img" src="img/html.png" alt="Logo HTML5" onmouseover="this.width=150; this.heigth=150;">
					<br><br>
					<p>We're watching you! <br> We know who you are !</p>
				</div>
				<div class="col-sm-2">
					<h3>CSS</h3>
					<img class="cols-img" src="img/css.jpg" alt="Logo CSS3" onmouseover="this.width=150; this.heigth=150;">
					<br><br>
					<p>We're watching you! <br> We know who you are !</p>
				</div>
				<div class="col-sm-2">
					<h3>Javascript</h3>
					<img class="cols-img" src="img/js.png" alt="Logo Javascript" onmouseover="this.width=150; this.heigth=150;">
					<br><br>
					<p>We're watching you! <br> We know who you are !</p>
				</div>
				<div class="col-sm-2">
					<h3>Jquery</h3>
					<img class="cols-img" src="img/dragon.png" alt="Un dragon !" onmouseover="this.width=150; this.heigth=150;">
					<br><br>
					<p>We're watching you! <br> We know who you are !</p>
				</div>
				<div class="col-sm-2">
					<h3>PHP</h3>
					<img class="cols-img" src="img/php.jpg" alt="Logo PHP" onmouseover="this.width=150; this.heigth=150;">
					<br><br>
					<p>We're watching you! <br> We know who you are !</p>
				</div>
				<div class="col-sm-1"></div>
			</div> <!-- Fin Wrapper 2 -->

			<div id="partie3"></div>
			<div id="wrapper3">
				<h1 class="text-center">Formulaire de contact</h1>
				<br>
				<form>
					<div class="form-group">
						<label for="name">Nom :</label>
						<input type="text" class="form-control" id="inputName" placeholder="Nom" required>
						<br>
				    <label for="InputEmail1">Adresse email :</label>
				    <input type="email" class="form-control" id="InputEmail1" placeholder="Email" required>
				    <br>
				    <label for="message">Message :</label>
				    <textarea class="form-control" rows="7" required></textarea>
				    <br>
				    <div class="subForm">
				    	<button type="submit" class="btn btn-submit">Envoyer</button>
				    </div>
				  </div>
				</form>				
			</div>
		</div> <!-- /container -->
			<div id="wrapper-btn-top">
				<a class="js-scrollTo" href="#top">
						<span  class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
				</a>
			</div>
		<footer>
			<div class="row text-center footer">
				<div class="col-xs-4 text-left">Exercice de révision</div>
				<div class="col-xs-4"></div>
				<div class="col-xs-4 text-right">Noé Champigny pour la philomatique</div>
			</div>
		</footer>
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.js-scrollTo').on('click', function() { // Au clic sur un élément
					var page = $(this).attr('href'); // Page cible
					var speed = 1500; // Durée de l'animation (en ms)
					$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
					return false;
				});
			});
		</script>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
