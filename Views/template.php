<!DOCTYPE html>
<html lang="en">
<head>
	<title>IVON</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="css_js/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css_js/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css_js/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css_js/css/owl.carousel.css"/>
	<link rel="stylesheet" href="css_js/css/style.css"/>
	
<style>

.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: grey;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>
<body>

	<header class="header-section">
 <?php if(!empty($alert)){  ?>
	 	
  <div class="card mb-4  border-bottom-success">
                <div class="card-body">
                 <center><strong><?php  echo $alert; ?></strong></center> 
                </div>
              </div>
              <br><br>
           <?php  }?>

    
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-md-2">

					<div class="site-logo">

						<a class="sidebar-brand d-flex align-items-center justify-content-center" href="template.php">
							  <div class="sidebar-brand-icon rotate-n-15">
								<i class="fas fa-network-wired"><img src="css_js/icon.jpg" alt=""></i>
							  </div>
						<div class="sidebar-brand-text mx-3" style="font-size: 50px; color:white; ">IVON</div>
						</a>

					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
	<?php
      if(!isset($_SESSION['code'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
    ?>			
				<div class="col-lg-10 col-md-10 ">
				<div class="dropdown header-btn">
						<button class="site-btn ">Se connecter</button>
							<div class="dropdown-content" >
							<a href="index.php?action=loginProfesseur">Professeur</a>
							<a href="index.php?action=loginChercheur">Chercheur</a>
							<a href="index.php?action=loginEtudiant">Etudiant</a>
							<a href="index.php?action=loginGuichetUnique">Responsable GU</a>
							<a href="index.php?action=loginResponsableCir">Responsable CIR</a>
							<a href="index.php?action=loginRespPoolCompetence">Responsable Pool de compétences</a>
							<a href="index.php?action=loginAdministrateur">Administrateur</a>
							</div>
				</div>


				<div class="col-lg-9 col-md-9 ">
				<div class="dropdown header-btn">
						<button class="site-btn ">S'inscrire</button>
							<div class="dropdown-content" >
							<a href="index.php?action=registerProfesseur">Professeur</a>
							<a href="index.php?action=registerChercheur">Chercheur</a>
							<a href="index.php?action=registerEtudiant">Etudiant</a>
							<!-- <a href="index.php?action=registerAdministrateur">Administrateur</a>-->
							</div>
							</div>
	<?php
      }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
    ?>				
				<div class="col-lg-9 col-md-9 ">
					<div class="dropdown header-btn">
						<button class="site-btn "><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']  ?> </button>-->
							<div class="dropdown-content" >
							<a href="profilProfesseur.php">Voir le profil</a>
							<a href="index.php?action=deconnexion">Se déconnecter</a>
							</div>
							</div>			
				
	<?php
      }
    ?>

									
					<nav class="main-menu" >
						<ul>
							<li><a href="template..php">Accueil</a></li>
							<li><a href="#">A propos de nous</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section class="hero-section set-bg" data-setbg="css_js/img/bg.jpg" style="height:700px;">
		<div class="container" >
			<div class="hero-text text-white ">
				<h2>Bienvenue à la cité d'innovation UM5R</h2>
				<p>La cité où tout est possible <br/>Déposez votre demande et lancez vous vers l'avenir.</p>
			</div>
		</div>
	</section>

	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Nos Services</h2>
				<p>Qui que vous soyez, étudiants, professeurs ou chercheurs, vous avez tous les droits de s'innover. </p>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/1.jpg"></div>
						<div class="ci-text">
							<h5>Invention</h5>
							<p>Connectez vous pour déposer votre demande d'invention</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/2.jpg"></div>
						<div class="ci-text">
							<h5>Brevet</h5>
							<p>Connectez vous pour déposer votre demande de brevet</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/7.jpg"></div>
						<div class="ci-text">
							<h5>Formation</h5>
							<p>Connectez vous pour lancer une formation</p><br/> 
							</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/4.jpg"></div>
						<div class="ci-text">
							<h5>Startup</h5>
							<p>Connectez vous pour introduire votre startup</p><br/>
							</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/5.jpg"></div>
						<div class="ci-text">
							<h5>Cluster technoligique</h5>
							<p>Connectez vous pour rejoindre notre cluster</p><br/>
							</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/6.jpg"></div>
						<div class="ci-text">
							<h5>Evenement</h5>
							<p>Connectez vous pour organiser un événement</p><br/>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="search-section">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Cherchez votre service</h2>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form">
							<input type="text" placeholder="Service" style="margin-left: 20%;">
							<button class="site-btn">Chercher</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title mb-0" >
				<h2>Nos centres</h2>
				<p>Faîtes partie d'un de nos centres pour profiter à bien de nos services. </p>
			</div>

			<div class="row" style = "margin-top: 40px;">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/8.jpg"></div>
						<div class="ci-text">
							<a href=""><h5>Clubs d'étudiants</h5></a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/9.jpg"></div>
						<div class="ci-text">
							<a href=""><h5>Structures de recherche</h5></a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/10.jpg"></div>
						<div class="ci-text">
							<a href=""><h5>Pool de compétence</h5></a>
					</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/11.jpg"></div>
						<div class="ci-text">
							<a href=""><h5>Etablissement</h5></a>
					</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/12.jpg"></div>
						<div class="ci-text">
							<a href =""><h5>Centre universitaire</h5></a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="css_js/img/5.jpg"></div>
						<div class="ci-text">
							<a href=""><h5>Cluster technologique</h5></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<footer class="sticky-footer bg-white">
	<div class="footer-bottom ">
			<div class="footer-warp">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
		</div>
		</div>
        </div>
      </footer>
	
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="css_js/js/jquery-3.2.1.min.js"></script>
	<script src="css_js/js/bootstrap.min.js"></script>
	<script src="css_js/js/mixitup.min.js"></script>
	<script src="css_js/js/circle-progress.min.js"></script>
	<script src="css_js/js/owl.carousel.min.js"></script>
	<script src="css_js/js/main.js"></script>
</html>