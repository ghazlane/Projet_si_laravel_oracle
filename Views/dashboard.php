
<div class="container-fluid">


          <!-- Page Heading -->
          <br>
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin: 0 auto; ">
            <h1 class="h3 mb-0 text-gray-800" style="margin: 0 auto;"><span style="color:#0380D1;">Statistique sur le nombre des demandes</span></h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 15px;">Accepter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 18px;"><?php echo $nombreDeamndeAccepter ; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-vote-yea fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-size: 15px;">En attente</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 18px;"><?php echo $nombreDeamndeEnAttente ; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-pause-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="col mr-2" >
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 15px;">En cours</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 18px;"><?php echo $nombreDeamndeEncours ; ?></div>
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-spinner fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" style="font-size: 15px;">Non accepter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 18px;"><?php echo $nombreDeamndeNonAccepter ; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-times-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>
          <!-- Content Row -->
          <div class="card shadow mb-4" style="width: 80%; margin: 0 auto;">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pourcentage des demandes</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Non accepter <span class="float-right"><?php echo $pourcentageDemanteNonAccepter; ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $pourcentageDemanteNonAccepter; ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">En cours <span class="float-right"><?php echo $pourcentageDemanteEnCours; ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $pourcentageDemanteEnCours; ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">En attente <span class="float-right"><?php echo $pourcentageDemanteEnAttente; ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $pourcentageDemanteEnAttente; ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Accepter  <span class="float-right"><?php echo $pourcentageDemanteAccepter; ?>%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $pourcentageDemanteAccepter; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $pourcentageDemanteAccepter; ?>"></div>
                  </div>
                </div>
              </div>





          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <!-- Color System -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>

  <div class"row">
    
    <div class="col-sm-6 text-center">
       <label class="label label-success" style="color:#0380D1;">Nombre demandes traitées par mois </label>
      <div id="stacked" ></div>
    </div>

     <div class="col-sm-6 text-center">
       <label class="label label-success" style="color:#0380D1;">Nombre demandes traitées par Chaque PC </label>
      <div id="stacked2" ></div>
    </div>
    
    
  </div>


         <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js'></script>
<script>

  var data = [
      { y: '<?php echo $liste_mois[10]["month"] ."/".$liste_mois[10]["year"]; ?>', a: <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[10]; ?> , b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[10]; ?>},
      { y: '<?php echo $liste_mois[9]["month"] ."/".$liste_mois[9]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[9]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[9]; ?>},
      { y: '<?php echo $liste_mois[8]["month"] ."/".$liste_mois[8]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[8]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[8]; ?>},
      { y: '<?php echo $liste_mois[7]["month"] ."/".$liste_mois[7]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[7]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[7]; ?>},
      { y: '<?php echo $liste_mois[6]["month"] ."/".$liste_mois[6]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[6]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[6]; ?>},
      { y: '<?php echo $liste_mois[5]["month"] ."/".$liste_mois[5]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[5]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[5]; ?>},
      { y: '<?php echo $liste_mois[4]["month"] ."/".$liste_mois[4]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[4]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[4]; ?>},
      { y: '<?php echo $liste_mois[3]["month"] ."/".$liste_mois[3]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[3]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[3]; ?>},
      { y: '<?php echo $liste_mois[2]["month"] ."/".$liste_mois[2]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[2]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[2]; ?>},
      { y: '<?php echo $liste_mois[1]["month"] ."/".$liste_mois[1]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[1]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[1]; ?>},
      { y: '<?php echo $liste_mois[0]["month"] ."/".$liste_mois[0]["year"]; ?>', a:  <?php echo $tableau_statistiqueNombreDemandeTraiterParMois[0]; ?>, b: <?php echo $tableau_statistiqueNombreDemandeAccepterParMois[0]; ?>}
    ],
    config1 = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['# demandes refuser','# demandes accepter'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
/*config.element = 'area-chart';
Morris.Area(config);
config.element = 'line-chart';
Morris.Line(config);
config.element = 'bar-chart';
Morris.Bar(config);
*/

  var data2 = [
  <?php $i=0; while ($row = $listePc->fetch()){?>
       { y: '<?php echo $row["NOM_PC"] ?>', a: <?php echo $nombreDeamndePC[$i]?>},
  <?php $i++; }?>
   
    ],
    config2 = {
      data: data2,
      xkey: 'y',
      ykeys: ['a'],
      labels: ['# demandes traitées'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config1.element = 'stacked';
config1.stacked = true;
Morris.Bar(config1);


config2.element = 'stacked2';
config2.stacked = true;
Morris.Bar(config2);
/*Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Friends", value: 30},
    {label: "Allies", value: 15},
    {label: "Enemies", value: 45},
    {label: "Neutral", value: 10}
  ]
});*/
</script>