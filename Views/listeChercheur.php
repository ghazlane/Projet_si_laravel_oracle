<div class="container-fluid" style="font-size: 16px; ">
          <br>
          <h1 class="h3 mb-2 text-gray-800">Liste des chercheurs</h1>
          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Thème de recherche</th>
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
                      <th>Thème de recherche</th>
                      <th>Date naissance</th>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Outils</th>
                    </tr>
                  </tfoot>
                  <tbody style="color: black;">
                    <?php while($row = $statement->fetch()) { ?>
                      <tr>
                          <td><?php echo $row['NOM_CHER']  ?></td>
                          <td><?php echo $row['PRENOM_CHER']  ?></td>
                          <td><?php echo $row['DATE_NAISSANCE_CHER']  ?></td>
                          <td><?php echo $row['THEME_RECHERCHE']  ?></td>
                          <td><?php echo $row['EMAIL_CHER']  ?></td>
                          <td><?php echo $row['TELEPHONE_CHER']  ?></td>
                          <td>
                              <?php echo '<a href="index.php?action=detailChercheur&&id='.$row['CODE_PROF'].'" class="btn btn-info btn-circle btn-sm" title="Ouvrir">'; ?>
                              
                                <i class="far fa-folder-open"></i>
                              </a>
                              <?php echo '<a href="index.php?action=updateChercheur&&id='.$row['CODE_PROF'].'" class="btn btn-warning btn-circle btn-sm" title="Mettre à jours">'; ?>
                              
                                <i class="fas fa-sync"></i>
                              </a>
                              <?php
                                echo '<a href="index.php?action=deleteChercheur&&id='.$row['CODE_PROF'].'" class="btn btn-danger btn-circle btn-sm" title="Supprimer">';
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