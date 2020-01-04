
        <div class="container-fluid" style="font-size: 16px; ">
          <br>
          <h1 class="h3 mb-2 text-gray-800">Liste des déclarations des inventions</h1>
          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float: left;">Tous les demandes de déclaration d'nvention</h6>
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
                      <th>Outils</th>
                    </tr>
                  </tfoot>
                  <tbody style="color: black;">
                    <?php while($row = $statement->fetch()) { ?>
                      <tr>
                          <td><?php echo $row['NOM_GU']  ?></td>
                          <td><?php echo $row['PRENOM_GU']  ?></td>
                          <td><?php echo $row['DATE_NAISSANCE_GU']  ?></td>
                          <td><?php echo $row['EMAIL_GU']  ?></td>
                          <td><?php echo $row['TELEPHONE_GU']  ?></td>
                          <td>
                              <?php echo '<a href="index.php?action=detailGuichetUnique&&id='.$row['ID_GU'].'" class="btn btn-info btn-circle btn-sm" title="Ouvrir">'; ?>
                              
                                <i class="far fa-folder-open"></i>
                              </a>
                              <?php echo '<a href="index.php?action=updateGuichetUnique&&id='.$row['ID_GU'].'" class="btn btn-warning btn-circle btn-sm" title="Mettre à jours">'; ?>
                              
                                <i class="fas fa-sync"></i>
                              </a>
                              <?php
                                echo '<a href="index.php?action=deleteGuichetUnique&&id='.$row['ID_GU'].'" class="btn btn-danger btn-circle btn-sm" title="Supprimer">';
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
