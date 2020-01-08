
<div class="container">
  <form method="post" action="index.php?action=saveUpdatePoolCompetence&id=<?php echo $row['ID_PC']  ?>">
    <h1>Modifier le Pool de Competence N° <?php echo $row['ID_PC']; ?></h1>

     <div class="form-group">
      <input type="text" required="required" name="nom" value="<?php echo $row['NOM_PC']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Nom de Pool</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="fonctionnalite" value="<?php echo $row['FONC_PC']  ?>" />
      <label for="input" class="control-label" style="left: 0;">Fonctionnalité de pool</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_creation"  value="<?php echo $row['DATE_CREATION']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date de création</label><i class="bar"></i>
    </div> 
    


<div class="button-container">
    <button type="Submit" class="button"><span>Valider la Modification</span></button>
  </div>
  </form>
  
</div>


