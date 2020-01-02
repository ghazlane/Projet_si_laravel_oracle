
<?php $row = $statement->fetch() ?>
          <h1 class="h3 mb-2 text-gray-800" style="color: #E56806">Détail de la déclaration N° <strong><?php echo $row['ID_DMD']  ?></strong></h1>
          <br>




<div class="card shadow mb-4" style="font-size: 14px; width: 70%; margin: 0 auto; ">
                <div class="card-header py-3">
                  <center><h6 class="m-0 font-weight-bold text-primary">Objet de l'invention : <span style="color: black; "><?php echo $row['OBJET_INVENTION']  ?></span></h6></center>
                </div>
              </div>
<div class="col-xl-3 col-md-6 mb-4" style="margin: 0 auto;">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="color: black;">Status de la déclaration</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['STATUT_DMD'];  ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="card shadow mb-4" style="font-size: 18px; width: 70% ;margin:0 auto; ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" >Description déclaration d'invention</h6>
                </div>
                <div class="card-body">
                  <?php echo $row['DESCRIPTION_INVENTION']; ?>
                </div>
              </div>

              




            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Default Card Example
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
              </div>

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                  The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
                </div>
              </div>
          </div>
      

            
