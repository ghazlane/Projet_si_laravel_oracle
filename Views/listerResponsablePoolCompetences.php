
        <div class="container-fluid" style="font-size: 16px; ">
          <?php if(!empty($alert)){  ?>
  <div class="card mb-4 py-1 border-bottom-success">
                <div class="card-body">
                  <?php  echo $alert; ?>
                </div>
              </div>
    <?php  }?>
          <br>
          <h1 class="h3 mb-2 text-gray-800">Liste des responsables des competences</h1>
          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Toutes la liste des responsables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date naissance</th>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Pool de competences</th>
                      <th>Outils</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date naissance</th>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Pool de competences</th>
                      <th>Outils</th>
                    </tr>
                  </tfoot>
                  <tbody style="color: black;">
                    <?php while($row = $statement->fetch()) { ?>
                      <tr>
                          <td><?php echo $row['NOM_RESP_PC']  ?></td>
                          <td><?php echo $row['PRENOM_RESP_PC']  ?></td>
                          <td><?php echo $row['DATE_NAISSANCE_PC']  ?></td>
                          <td><?php echo $row['EMAIL_RESP_PC']  ?></td>
                          <td><?php echo $row['TELEPHONE_PC']  ?></td>
                          <td><?php echo $row['NOM_PC']  ?></td>
                          <td>
                              
                              <?php echo '<a href="index.php?action=updateRspPoolCompetence&&id='.$row['ID_RESP_PC'].'" class="btn btn-warning btn-circle btn-sm" title="Mettre à jours">'; ?>
                              
                                <i class="fas fa-sync"></i>
                              </a>
                              <?php
                                echo '<a href="index.php?action=deleteRspPoolCompetence&&id='.$row['ID_RESP_PC'].'" class="btn btn-danger btn-circle btn-sm" title="Supprimer">';
                              ?>
                                <i class="fas fa-trash"></i>
                              </a>
                          </td>
                      </tr>
                    <?php  }?>
         </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
