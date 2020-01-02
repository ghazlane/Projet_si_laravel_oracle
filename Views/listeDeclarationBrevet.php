</div>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Liste des Déclarations de Brevet</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Déclarations des Brevets</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Description déclaration</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom Brevet</th>
              <th>Categorie Brevet</th>
              <th>Domaine Brevet</th>
              <th>Description déclaration</th>
            </tr>
          </tfoot>
          <tbody>
           <?php while($row = $statement->fetch()) { ?>
             <tr>

               <td><?php echo $row['NOM_BREVET']  ?></td>
               <td><?php echo $row['CATEGORIE_BREVET']  ?></td>
               <td><?php echo $row['DOMAINE_BREVET']  ?></td>
               <td><?php echo $row['DESCRIPTION_DMD']  ?></td>
               <td><a href="#" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Consulter</span>
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