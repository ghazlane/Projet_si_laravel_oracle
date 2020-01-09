<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>IVON</title>

  <!-- Custom fonts for this template-->
  <link href="css_js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css_js/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- style table --> 
  <link href="css_js/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css_js/formularstyle.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!--style="line-height: 0.4em; "--> 
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-network-wired"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="font-size: 24px;">IVON</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <?php if($_SESSION['type'] =='GuichetUnique' or $_SESSION['type'] =='ResponsableCir'){?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item" >
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accueil</span></a> 
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Nouvelles demandes 
      </div>
      <?php if($_SESSION['type'] =='GuichetUnique' ){  ?>
        <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-asterisk"></i>
          <span>Déclaration d'invention</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration d'invention</h6>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Enattente">Demandes en attentes</a>
            <a class="collapse-item" href="index.php?action=InventionPretes">Déclaration prêtes</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Encours">Demandes en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>
       <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="far fa-plus-square"></i>
          <span>Déclaration de brevets</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration de brevets</h6>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Enattente">Demandes en attentes</a>
             <a class="collapse-item" href="index.php?action=brevetsPretes">Demande prêtes</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Encours">Demandes en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
          <i class="fas fa-receipt"></i>
          <span>Lancer une formation</span>
        </a>
        <div id="collapseeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Lancer une formation</h6>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Enattente">Demandes en attentes</a>
            <a class="collapse-item" href="index.php?action=FormationPretes">Demande prêtes</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Encours">Demandes en cours </a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefoor" aria-expanded="true" aria-controls="collapsefoor">
          <i class="fas fa-star"></i>
          <span>Lancement de startups</span>
        </a>
        <div id="collapsefoor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lancement de startups</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouveau Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
          <i class="fab fa-trello"></i>
          <span>Demande de prototypage</span>
        </a>
        <div id="collapsefive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Demande de prototypage</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouveau Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesex" aria-expanded="true" aria-controls="collapsesex">
          <i class="far fa-calendar-alt"></i>
          <span>Organiser un événement</span>
        </a>
        <div id="collapsesex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Organiser un événement</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouveau Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>     
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
          <i class="fas fa-cubes"></i>
          <span>Cluster technologique</span>
        </a>
        <div id="collapseseven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Cluster technologique</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouveau Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>

      

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <i class="fas fa-funnel-dollar"></i>
          <span>Financement d'action</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Financement d'action</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouveau Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>



      <?php } ?>




 <?php if($_SESSION['type'] =='ResponsableCir'){  ?>
            <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-asterisk"></i>
          <span>Déclaration d'invention</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration d'invention</h6>

             <a class="collapse-item" href="index.php?action=inventionsAccepterParGU">Demande transmis par GU</a>
            <a class="collapse-item" href="index.php?action=inventionsEncoursCIR">Demandes en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>
       <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="far fa-plus-square"></i>
          <span>Déclaration de brevets</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration de brevets</h6>
         
             <a class="collapse-item" href="index.php?action=brevetsAccepterParGU">Demande transmis par GU</a>
            <a class="collapse-item" href="index.php?action=brevetsEncoursCIR">Demandes en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
          <i class="fas fa-receipt"></i>
          <span>Lancer une formation</span>
        </a>
        <div id="collapseeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Lancer une formation</h6>
             <a class="collapse-item" href="index.php?action=formationsAccepterParGU">Demande transmis par GU</a>
            <a class="collapse-item" href="index.php?action=formationsEncoursCIR">Demandes en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefoor" aria-expanded="true" aria-controls="collapsefoor">
          <i class="fas fa-star"></i>
          <span>Lancement de startups</span>
        </a>
        <div id="collapsefoor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lancement de startups</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
          <i class="fab fa-trello"></i>
          <span>Demande de prototypage</span>
        </a>
        <div id="collapsefive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Demande de prototypage</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesex" aria-expanded="true" aria-controls="collapsesex">
          <i class="far fa-calendar-alt"></i>
          <span>Organiser un événement</span>
        </a>
        <div id="collapsesex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Organiser un événement</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>     
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
          <i class="fas fa-cubes"></i>
          <span>Cluster technologique</span>
        </a>
        <div id="collapseseven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Cluster technologique</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>

      

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <i class="fas fa-funnel-dollar"></i>
          <span>Financement d'action</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Financement d'action</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>

      <?php } ?>



            <?php if($_SESSION['type'] =='RespPoolCompetence'){  ?>
         <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-asterisk"></i>
          <span>Déclaration d'invention</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration d'invention</h6>
            <a class="collapse-item" href="index.php?action=NouvelleDeclarationPoolsCompetences">Nouvelle déclaration</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Encours">Déclarations en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention&statut=Acceptee">Déclaratons traitées</a>
          </div>
        </div>
      </li>
       <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="far fa-plus-square"></i>
          <span>Déclaration de brevets</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Nouvelle déclaration</h6>
            <a class="collapse-item" href="index.php?action=NouvelleDeclarationBrevetPoolsCompetences">Nouvelle déclaration</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Encours">Déclarations en cours</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet&statut=Acceptee">Déclaratons traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
          <i class="fas fa-receipt"></i>
          <span>Lancer une formation</span>
        </a>
        <div id="collapseeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Lancer une formation</h6>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Enattente">Nouvelle formation</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Encours">Demandes en cours </a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation&statut=Acceptee">Demandes traitées</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefoor" aria-expanded="true" aria-controls="collapsefoor">
          <i class="fas fa-star"></i>
          <span>Lancement de startups</span>
        </a>
        <div id="collapsefoor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lancement de startups</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
          <i class="fab fa-trello"></i>
          <span>Demande de prototypage</span>
        </a>
        <div id="collapsefive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Demande de prototypage</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesex" aria-expanded="true" aria-controls="collapsesex">
          <i class="far fa-calendar-alt"></i>
          <span>Organiser un événement</span>
        </a>
        <div id="collapsesex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Organiser un événement</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prête</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traitée</a>     
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
          <i class="fas fa-cubes"></i>
          <span>Cluster technologique</span>
        </a>
        <div id="collapseseven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Cluster technologique</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <i class="fas fa-funnel-dollar"></i>
          <span>Financement d'action</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Financement d'action</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Nouvelle Demande</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande prêt</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Demande traiter</a>
          </div>
        </div>
      </li>

      <?php } ?>










<!-- Ancienne artie --> 
      <!-- Nav Item - Pages Collapse Menu -->
      <?php if($_SESSION['type'] != 'GuichetUnique' && $_SESSION['type'] != "RespPoolCompetence") {?>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-asterisk"></i>
          <span>Déclaration d’invention</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration d’invention</h6>
            <a class="collapse-item" href="index.php?action=declarationInvention">Ajouter déclaration</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationInvention">Lister déclaration</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="far fa-plus-square"></i>
          <span>Déclaration de brevets</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Déclaration de brevets</h6>
            <a class="collapse-item" href="index.php?action=declarationBrevet">Ajouter Brevet</a>
            <a class="collapse-item" href="index.php?action=listeDeclarationBrevet">Lister déclaration</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
          <i class="fas fa-receipt"></i>
          <span>Lancer une formation</span>
        </a>
        <div id="collapseeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Lancer une formation</h6>
            <a class="collapse-item" href="index.php?action=declarationFormation">Ajouter demande </a>
            <a class="collapse-item" href="index.php?action=listeDeclarationFormation">Lister demande</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefoor" aria-expanded="true" aria-controls="collapsefoor">
          <i class="fas fa-star"></i>
          <span>Lancement de startups</span>
        </a>
        <div id="collapsefoor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lancement de startups</h6>
            <a class="collapse-item" href="index.html">Ajouter demande</a>
            <a class="collapse-item" href="index.html">Lister demande</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
          <i class="fab fa-trello"></i>
          <span>Demande de prototypage</span>
        </a>
        <div id="collapsefive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Demande de prototypage</h6>
            <a class="collapse-item" href="index.html">Ajouter demande</a>
            <a class="collapse-item" href="index.html">Lister demande</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesex" aria-expanded="true" aria-controls="collapsesex">
          <i class="far fa-calendar-alt"></i>
          <span>Organiser un événement</span>
        </a>
        <div id="collapsesex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Organiser un événement</h6>
            <a class="collapse-item" href="index.html">Ajouter demande</a>
            <a class="collapse-item" href="index.html">Lister demande</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
          <i class="fas fa-cubes"></i>
          <span>Cluster technologique</span>
        </a>
        <div id="collapseseven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Cluster technologique</h6>
            <a class="collapse-item" href="index.html">Demande d'adhésion</a>
            <a class="collapse-item" href="index.html">Lister demande</a>
          </div>
        </div>
      </li>

      

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <i class="fas fa-funnel-dollar"></i>
          <span>Financement d'action</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Financement d'action</h6>
            <a class="collapse-item" href="index.html">Ajouter demande </a>
            <a class="collapse-item" href="index.html">Lister demande</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Demandes
      </div>
      <li class="nav-item" >
        <a class="nav-link" href="index.php?action=listeDemandeEnCours">
          <i class="fas fa-spinner"></i>
          <span>Demandes en cours</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listeDemandeTraite">
          <i class="fas fa-list-ul"></i>
          <span>Demandes traitées</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listeTousDemande">
          <i class="fas fa-tasks"></i>
          <span>Toutes les demande</span></a>
      </li>
      <!-- Heading -->
      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Comptes
      </div>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
          <i class="fas fa-street-view"></i>
          <span>Directeur de la CIR </span>
        </a>
        <div id="collapseTen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Directeur de la CIR</h6>
            <a class="collapse-item" href="index.html">Ajouter compte </a>
            <a class="collapse-item" href="index.html">Lister les Directeur</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
          <i class="fas fa-user-shield"></i>
          <span>Responsable de la CIR </span>
        </a>
        <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Responsable de la CIR</h6>
            <a class="collapse-item" href="index.html">Ajouter compte </a>
            <a class="collapse-item" href="index.html">Lister les comptes</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
          <i class="fas fa-globe"></i>
          <span>Guichet Unique </span>
        </a>
        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Guichet Unique</h6>
            <a class="collapse-item" href="index.php?action=ajouterGuichetUnique">Ajouter compte </a>
            <a class="collapse-item" href="index.php?action=listerGuichetUnique">Lister les comptes</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh3" aria-expanded="true" aria-controls="collapseTh3">
          <i class="fas fa-user-tie"></i>
          <span>Résp pool compétence </span>
        </a>
        <div id="collapseTh3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Résp pool compétence</h6>
            <a class="collapse-item" href="index.php?action=ajouterResponsablePoolCompetences">Ajouter compte </a>
            <a class="collapse-item" href="index.php?action=ListerResponsablePoolCompetences">Lister les comptes</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh6" aria-expanded="true" aria-controls="collapseTh6">
          <i class="fas fa-user"></i>
          <span>Administratif </span>
        </a>
        <div id="collapseTh6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Administratif</h6>
            <a class="collapse-item" href="index.html">Ajouter compte </a>
            <a class="collapse-item" href="index.html">Lister les comptes</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Services et gestions
      </div>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh4" aria-expanded="true" aria-controls="collapseTh4">
          <i class="fas fa-bookmark"></i>
          <span>Pool de compétences </span>
        </a>
        <div id="collapseTh4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Pool de compétences</h6>
            <a class="collapse-item" href="index.php?action=ajouterPoolCompetence">Ajouter pool </a>
            <a class="collapse-item" href="index.php?action=listePoolCompetence">Lister les pools</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh7" aria-expanded="true" aria-controls="collapseTh7">
         <i class="fas fa-map-marked-alt"></i>
          <span>Point Nodal </span>
        </a>
        <div id="collapseTh7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Point Nodal</h6>
            <a class="collapse-item" href="index.html">Ajouter point nodal </a>
            <a class="collapse-item" href="index.html">Lister les points nodaux</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh8" aria-expanded="true" aria-controls="collapseTh8">
          <i class="fas fa-school"></i>
          <span>établissement </span>
        </a>
        <div id="collapseTh8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >établissement</h6>
            <a class="collapse-item" href="index.html">Ajouter établissement </a>
            <a class="collapse-item" href="index.html">Lister les établissements</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh9" aria-expanded="true" aria-controls="collapseTh9">
          <i class="fas fa-project-diagram"></i>
          <span>Structure de recherche </span>
        </a>
        <div id="collapseTh9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Structure de recherche</h6>
            <a class="collapse-item" href="index.html">Ajouter structures </a>
            <a class="collapse-item" href="index.html">Lister les structures</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh10" aria-expanded="true" aria-controls="collapseTh10">
          <i class="fas fa-users"></i>
          <span>Clubs étudiant </span>
        </a>
        <div id="collapseTh10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Clubs étudiant</h6>
            <a class="collapse-item" href="index.html">Ajouter clubs </a>
            <a class="collapse-item" href="index.html">Lister les clubs</a>
          </div>
        </div>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh12" aria-expanded="true" aria-controls="collapseTh12">
          <i class="fas fa-map-marked"></i>
          <span>Centre universitaire </span>
        </a>
        <div id="collapseTh12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Centre universitaire</h6>
            <a class="collapse-item" href="index.html">Ajouter centre </a>
            <a class="collapse-item" href="index.html">Lister les centres</a>
          </div>
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTh11" aria-expanded="true" aria-controls="collapseTh11">
          <i class="fab fa-cuttlefish"></i>
          <span>Cluster techologique </span>
        </a>
        <div id="collapseTh11" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" >Cluster techologique</h6>
            <a class="collapse-item" href="index.html">Ajouter cluster </a>
            <a class="collapse-item" href="index.html">Lister les cluster</a>
          </div>
        </div>
      </li>
    <?php }?>
      

      
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?></span>
                <img class="img-profile rounded-circle" src="css_js/img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?action=deconnexion"  >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Se déconnecter
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> <?php echo $contenu; ?></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="css_js/vendor/jquery/jquery.min.js"></script>
  <script src="css_js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="css_js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="css_js/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="css_js/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="css_js/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="css_js/js/demo/datatables-demo.js"></script>

</body>

</html>
