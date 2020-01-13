
<div class="container">
  <form method="post" action="index.php?action=saveUpdatePointNodal&id=<?php echo $row['ID_PN']  ?>">
    <h1>Modifier le Point Nodal N° <?php echo $row['ID_PN']; ?></h1>

     <div class="form-group">
      <input type="text" required="required" name="nom" value="<?php echo $row['NOM_PN']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Nom Point Nodal</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="nb_ense" value="<?php echo $row['NB_ENSE']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Nombre des Enseignants</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number"  name="nb_cher"  value="<?php echo $row['NB_CHER']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Nombre de Chercheurs</label><i class="bar"></i>
    </div> 
    


<div class="button-container">
    <button type="Submit" class="button"><span>Valider la Modification</span></button>
  </div>
  </form>
  
</div>


