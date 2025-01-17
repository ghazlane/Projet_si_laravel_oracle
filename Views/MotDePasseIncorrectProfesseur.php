
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Connexion</title>
  <!-- Custom fonts for this template-->
  <link href="css_js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css_js/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-20 col-lg-12 col-md-12" style="top: 100px;">
        <div class="card o-hidden border-0 shadow-lg my-5" >
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block " style="background-image: url('css_js/img/Universite-Mohammed-V-de-Rabat.jpg');"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                  <?php if(@$_GET['err']==1){ ?>
            <h1 class="h4 text-gray-900 mb-4">Mot de passe incorrect. Réessayez .</h1>
                <?php }else {?> 
                    <h1 class="h4 text-gray-900 mb-4">Connexion Professeur</h1>
                    <?php } ?> 
                    <h5 style="color: red;">Mot de passe ou username est incorrect</h5>
                  </div>
                  <br>
                  <form class="user" method="post" action="index.php?action=connexionProfesseur">
           
                    <div class="form-group">
                      <input type="email" required="required" class="form-control form-control-user" id="email_prof" aria-describedby="emailHelp" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password"  required="required" class="form-control form-control-user" id="mot_de_passe_prof" placeholder="Mot de passe" name="password">
                    </div>
                    <hr>
                      <input type="submit" required="required" class="btn btn-primary btn-user btn-block" value="Se connecter">
                  </form>
                </div>
              </div>
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