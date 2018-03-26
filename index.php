<?php

// Déclaration PDO
$pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
));

// Requêtes langages
$resultat = $pdo->query("SELECT * FROM langages WHERE type = 'front'");
$frontLangages = $resultat->fetchAll();

$resultat = $pdo->query("SELECT * FROM langages WHERE type = 'back'");
$backLangages = $resultat->fetchAll();

// Requête realisations
$resultat = $pdo->query("SELECT * FROM realisations");
$realisations = $resultat->fetchAll();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portfolio Julie Galland</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- CSS -->
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body data-spy="scroll" data-target=".navbar">

		<!-- *****  Début de la NAV ***** -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container" id="navbar">

           <!-- Navbar header -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
             </button>
             <a  class="js-scrollTo page-scroll" href="#"><div class="navbar-brand navbar-brand-left">Julie Galland</div></a>
           </div>

           <!-- Navbar body -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
               <li class="active"><a id="myBar" class="js-scrollTo page-scroll" href="#link_langages">Compétences<span class="sr-only">(current)</span></a></li>
               <li><a  class="js-scrollTo page-scroll"  href="#link_realisations">Réalisations</a></li>
               <li><a  class="js-scrollTo page-scroll" href="#link_experience">Expérience</a></li>
               <li><a class="js-scrollTo page-scroll"  href="#link_contact">Contact</a></li>
             </ul>
           </div>
         </div><!-- fin du container -->
       </nav>
		<!-- *****  Fin de la NAV ***** -->

		<!-- *****  Début du Header ***** -->
		<header>
			<div class="container" id="header">
				<h2 class="text-center">Julie Galland</h2>
				<h1 class="text-center">Développeuse-Intégratrice Web</h1>
			</div>

			<!-- *****  Début de la section accordéon A propos ***** -->
			<div class="text-center accordeon">A propos...</div>
			<div class="container panneau">
				<h3 class="text-center">Bonjour, bienvenue sur mon portfolio!</h3>
				<p>Fraichement reconvertie en tant que développeuse et intégratrice web, je cherche actuellement une entreprise pour m'aider à grandir dans cette voie.
Ancienne restauratrice d'œuvres d'art, puis professeur des écoles, mes choix peuvent paraître éloignés, mais ils ont en commun de proposer sans cesse de nouveaux défis! Toujours avide d'apprendre, j'aime chercher de nouvelles solutions. Et avec la programmation, je suis servie! Ma formation chez WebForce3 a été une véritable révélation et je suis plus motivée que jamais pour vous prouver que j'ai ma place dans la grande famille des développeurs.</p>
			</div>
			<div class="text-center voirCV">
				<a href="cv_julie_galland_developpeuse_integratrice_web_et_mobile.pdf" target="blank">Voir mon CV <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
			</div>
			<!-- *****  Fin de A propos ***** -->

		</header>
		<!-- *****  Fin du Header ***** -->

		<main>				
			<!-- *****  Début de la section Langages ***** -->
			<section>
				<div id="link_langages"></div>
				<div class="container" id="langages">
					<h2 class="text-center">Compétences Techniques</h2>

					<h3>Front</h3>
					<div class="row">
						<!-- Boucle langage front -->
						<?php foreach ($frontLangages as $front): ?>
							<?php extract($front)?>
							<div class="col-sm-4 col-md-3">
								<div class="thumbnail">
									<div class="figure"><img src="img/<?=$logo?>" alt="<?=$nom?>" class="center-block"></div>
									<div class="caption text-center">
										<div class="progress" id="webLangages">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?=$niveau?>" aria-valuemin="0" aria-valuemax="100" ><?=$niveau?></div>
										</div>
									</div>
								</div> <!-- fin du thumbnail -->
							</div> <!-- fin du col-md-4 -->
						<?php endforeach;?>
					</div> <!-- fin de la row -->

					<h3>Back</h3>
					<div class="row">
						<!-- Boucle langage back-->
						<?php foreach ($backLangages as $back): ?>
							<?php extract($back)?>
							<div class="col-sm-4 col-md-3">
								<div class="thumbnail">
									<div class="figure"><img src="img/<?=$logo?>" alt="<?=$nom?>" class="center-block"></div>
									<div class="caption text-center">
										<div class="progress" id="webLangages">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?=$niveau?>" aria-valuemin="0" aria-valuemax="100" ><?=$niveau?></div>
										</div>
									</div>
								</div> <!-- fin du thumbnail -->
							</div> <!-- fin du col-md-4 -->
						<?php endforeach;?>
					</div> <!-- fin de la row -->

					<h3>Petits plus</h3>
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="thumbnail">
								<div class="figure"><img src="img/github.png" alt="github" class="center-block"></div>
								<div class="caption text-center">
									<div class="progress" id="webLangages">
										<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" >65</div>
									</div>
								</div>
							</div> <!-- fin du thumbnail -->
						</div> <!-- fin du col-md-4 -->
						<div class="col-sm-4 col-md-3">
							<div class="thumbnail">
								<div class="figure"><img src="img/anglais.png" alt="anglais" class="center-block"></div>
								<div class="caption text-center">
									<div class="progress" id="webLangages">
										<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >80</div>
									</div>
								</div>
							</div> <!-- fin du thumbnail -->
						</div> <!-- fin du col-md-4 -->
						<div class="col-sm-4 col-md-3">
							<div class="thumbnail">
								<div class="figure"><img src="img/photoshop.png" alt="photoshop" class="center-block"></div>
								<div class="caption text-center">
									<div class="progress" id="webLangages">
										<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >40</div>
									</div>
								</div>
							</div> <!-- fin du thumbnail -->
						</div> <!-- fin du col-md-4 -->
							
					</div> <!-- fin de la row -->

				</div> <!-- fin du container -->
			</section> <!-- *****  Fin de la section Langages ***** -->

			<!-- *****  Début de la section Réalisations ***** -->
			<section>
				<div id="link_realisations"></div>
				<div class="container" id="realisations">
					<h2 class="text-center">Mes réalisations</h2>
					
					<div class="row">
						<!-- LICORNES -->
						<div class="col-sm-6 col-md-4">
							<!-- Vignette -->
							<figure class="thumbnail">
								<img src="realisations/licornes.png" alt="Licornes">
								<div id="overlay1" class="overlay">
									<div class="texteCache">Voir du code HTML</div>
								</div>
								<figcaption class="text-center">
									<h3>Licornes</h3>
									<p>HTML, CSS</p>
								</figcaption>
							</figure>
							<!-- Lightbox -->
							<div id="lightbox1" class="lightbox">
								<span class="close">&times;</span>
								<div class="lightbox-content">
									<img src="realisations/code_html.png" alt="code">
								</div>
							</div>
						</div>	

						<!-- CHATS -->	
						<div class="col-sm-6 col-md-4">
							<!-- Vignette -->
							<figure class="thumbnail">
								<img src="realisations/chats.png" alt="Chats">
								<div id="overlay2" class="overlay">
									<div class="texteCache">Voir du code CSS</div>
								</div>
								<figcaption class="text-center">
									<h3>Chats</h3>
									<p>HTML, CSS, Bootstrap, Javascript</p>
								</figcaption>
							</figure>
							<!-- Lightbox -->
							<div id="lightbox2" class="lightbox">
								<span class="close">&times;</span>
								<div class="lightbox-content">
									<img src="realisations/code_css.png" alt="code">
								</div>
							</div>
						</div>	

						<!-- SLIDERS -->
						<div class="col-sm-6 col-md-4">
							<!-- Vignette -->
							<figure class="thumbnail">
								<img src="realisations/sliders.png" alt="Sliders">
								<div id="overlay3" class="overlay">
									<span class="texteCache">Voir du code JS</span>
								</div>
								<figcaption class="text-center">
									<h3>Sliders</h3>
									<p>HTML, CSS, Bootstrap, Javascript</p>
								</figcaption>
							</figure>
							<!-- Lightbox -->
							<div id="lightbox3" class="lightbox">
								<span class="close">&times;</span>
								<div class="lightbox-content">
									<img src="realisations/code_js.png" alt="code">
								</div>
							</div>
						</div>	

						<!-- SALLEA -->
						<div class="col-sm-6 col-md-4">
							<!-- Vignette -->
							<figure class="thumbnail">
								<img src="realisations/sallea.png" alt="SalleA">
								<div id="overlay4" class="overlay">
									<span class="texteCache">Voir du code PHP</span>
								</div>
								<figcaption class="text-center">
									<h3>SalleA</h3>
									<p>SQL, PHP, HTML, CSS, Bootstrap</p>
								</figcaption>
							</figure>
							<!-- Lightbox -->
							<div id="lightbox4" class="lightbox">
								<span class="close">&times;</span>
								<div class="lightbox-content">
									<img src="realisations/code_php.png" alt="code">
								</div>
							</div>
						</div>

						<!-- BEP -->
						<div class="col-sm-6 col-md-4">
							<figure class="thumbnail">
								<img src="realisations/bep.png" alt="Bep">
								<div id="overlay5" class="overlay">
									<span class="texteCache">Voir du code Symfony</span>
								</div>
								<figcaption class="text-center">
									<h3>Projet Bêp</h3>
									<p>Symfony</p>
								</figcaption>
							</figure>
							<!-- Lightbox -->
							<div id="lightbox5" class="lightbox">
								<span class="close">&times;</span>
								<div class="lightbox-content">
									<img src="realisations/code_symfony.png" alt="code">
								</div>
							</div>
						</div>

					</div> <!-- fin de la row -->

				</div> <!-- fin du container -->
			</section> <!-- *****  Fin de la section Réalisations ***** -->

			<!-- *****  Début de la section Expériences ***** -->
			<section>
				<div id="link_experience"></div>
				<div class="container" id="experience">
					<h2 class="text-center">Mes précédentes expériences</h2>
					<p>Je suis riche d'un passé professionnel varié qui n'a fait que renforcer la développeuse que je suis maintenant. Découvrez ce que mes expériences m'ont apportées :</p>

					<div class="row">
						<div class="col-md-4 col-xs-12">
							<div id="boite1" class="center-block">
								<p class="text-center">Systèmes automatisés (Lycée)<p>
									<ul id="reveal1">
										<li>Découverte de la logique de programmation</li>
									</ul>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div id="boite2" class="center-block">
								<p class="text-center">Conservation du patrimoine</p>
								<ul id="reveal2">
									<li>Minutie</li>
									<li>Rigueur</li>
									<li>Méthode</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div id="boite3" class="center-block">
								<p class="text-center">Enseignement</p>
								<ul id="reveal3">
									<li>Ouverture d'esprit</li>
									<li>Bienveillance</li>
									<li>Transmission du savoir</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- *****  Fin de la section Experiences ***** -->

			<!-- *****  Début de la section Contact ***** -->
			<section>
				<div id="link_contact"></div>
				<div class="container" id="contact">
					<div class="row">
						<div class="col-md-6">
							<h2 class="text-center">Retrouvez-moi sur :</h2>
							<div class="row findMe">
								<div class="col-md-6 lien">
									<a href="https://www.linkedin.com/in/juliegalland79/"><img class="center-block" src="img/linkedin.png" alt="LinkedIn"></a>
								</div>
								<div class="col-md-6 lien">
									<a href="https://github.com/Julie79"><img class="center-block" src="img/github.png" alt="GitHub"></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Contactez-moi !</h2>
							<div class="row findMe">
								<div class="col-md-6 lien">
									<img src="img/phone.png" alt="telephone" data-toggle="tooltip" title="06 10 61 66 10">
								</div>
								<div class="col-md-6 lien">
									<a href="mailto:juliegalland@yahoo.fr"><img src="img/mail.png" alt="mail"  data-toggle="tooltip" title="juliegalland@yahoo.fr"></span></a>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</section>
			<!-- *****  Fin de la section Contact ***** -->

		</main>
		<footer>
			<div class="container">
				© 2017 Julie Galland
			</div>
		</footer>

	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Mon script -->
	<script src="js/script.js"></script>

	</body>
</html>