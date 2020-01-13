
<div class="container">
  <form method="post" action="index.php?action=saveUpdateEtablissement&id=<?php echo $row['ID_ETAB']  ?>">
    <h1>Modifier le Etablissement N° <?php echo $row['ID_ETAB']; ?></h1>

     <div class="form-group">
      <input type="text" required="required" name="nom" value="<?php echo $row['NOM_ETAB']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Nom de Etablissement</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="nb_ense" value="<?php echo $row['NB_ENSE_ETAB']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Nombre des Enseignants</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number"  name="nb_cher"  value="<?php echo $row['NB_CHER_ETAB']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Nombre de Chercheurs</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number"  name="nb_fil"  value="<?php echo $row['NB_FIL_ETAB']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Nombre de Fillières</label><i class="bar"></i>
    </div> 
    <div class="form-group">
      <select name="id_pn">
        <option value="<?php echo $row['ID_PN'];?>"><?php echo $row['NOM_PN'];  ?></option>
        <?php while($row = $statement->fetch() ){?>
        <option value="<?php echo $row['ID_PN'];?>"><?php echo $row['NOM_PN'];  ?></option>
        <?php }?>
      </select>
      <label for="select" class="control-label">Point nodal</label><i class="bar"></i>
    </div>
    


<div class="button-container">
    <button type="Submit" class="button"><span>Valider la Modification</span></button>
  </div>
  </form>
  
</div>


