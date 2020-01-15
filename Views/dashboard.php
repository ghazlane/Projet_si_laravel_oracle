<style>
  table {
  border-collapse: collapse;
}
 th {
  background: #ccc;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
}

tr:nth-child(even) {
  background: #efefef;
}

tr:hover {
  background: #d1d1d1;
}
</style>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 15px;">Acceptée</div>
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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" style="font-size: 15px;">Non acceptée</div>
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
                  <h4 class="small font-weight-bold">Non acceptée <span class="float-right"><?php echo $pourcentageDemanteNonAccepter; ?>%</span></h4>
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
                  <h4 class="small font-weight-bold">Acceptée  <span class="float-right"><?php echo $pourcentageDemanteAccepter; ?>%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $pourcentageDemanteAccepter; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $pourcentageDemanteAccepter; ?>"></div>
                  </div>
                </div>
              </div>
        </div>

  
    <br> <br>
    <div class="col-sm-6 text-center" style="margin: 0 auto; ">
       <label class="label label-success" style="color:#0380D1;">Nombre demandes traitées par mois </label>
      <div id="stacked" ></div>
    </div>
<br><br>
     <div class="col-sm-6 text-center" style="margin: 0 auto; ">
       <label class="label label-success" style="color:#0380D1;">Nombre demandes traitées par Chaque PC </label>
      <div id="stacked2" ></div>
    </div>
<br><br><br>
<?php if($_SESSION['type'] == 'GuichetUnique') {?>
<label class="label label-success" style="color:#0380D1;">Nombre demandes traitées par chaque responsable de cir</label>
<br><br>
    <table class="my_table" style="margin: 0 auto; font-size: 20px; width: 70%">
      <tr>
        <th >Nom Prenom</th>
        <th>Nombre demande traitées</th>
      </tr>
      <tbody>
        <?php foreach ($nbrDemandeTraite as $key => $value) {
          echo "<tr>"; 
            echo "<td>".$key."</td>";
            echo "<td>".$value."</td>";
          echo "</tr>"; 
        }?>
        
      </tbody>
    </table>
  <?php }?>
<br><br><br>
<?php if($_SESSION['type'] == 'ResponsableCir') {?>
<label class="label label-success" style="color:#0380D1;">Nombre demande traites par chaque responsable de GU</label>
    <table class="my_table" style="margin: 0 auto; font-size: 20px; width: 70%">
      <tr>
        <th >Nom Prenom</th>
        <th>Nombre demande traitées</th>
      </tr>
      <tbody>
        <?php foreach ($nbrDemandeTraiteGu as $key => $value) {
          echo "<tr>"; 
            echo "<td>".$key."</td>";
            echo "<td>".$value."</td>";
          echo "</tr>"; 
        }?>
        <?php } ?>
      </tbody>
    </table>
    
    
  


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