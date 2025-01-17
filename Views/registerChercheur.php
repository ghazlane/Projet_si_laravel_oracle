<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inscription chercheur</title>

  <!-- Custom fonts for this template-->
  <link href="css_js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css_js/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
  <div class="container">
     
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('css_js/img/research.jpg');"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Créer un compte chercheur !</h1>
              </div>
              <form method="post" action="index.php?action=saveRegisterChercheur" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" required="required" class="form-control form-control-user" name="nom_cher" placeholder="Nom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" required="required" class="form-control form-control-user" name="prenom_cher" placeholder="Prénom">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" name="date_naissance_cher" placeholder="Date de naissance">
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" name="telephone_cher" placeholder="Téléphone">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="theme_recherche" placeholder="Thème de recherche">
                </div>
                <div class="form-group">
                  <input type="email" required="required" class="form-control form-control-user" name="email_cher" placeholder="E-mail">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" required="required" class="form-control form-control-user" name="mot_de_passe_cher" placeholder="Mot de passe">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" required="required" class="form-control form-control-user" name="mot_de_passe_cher" placeholder="Confirmer le mot de passe">
                  </div>
                </div>
                <button type="Submit" class="btn btn-primary btn-user btn-block">
                  Créer un compte
                </button>
            </form>
            </div >
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
