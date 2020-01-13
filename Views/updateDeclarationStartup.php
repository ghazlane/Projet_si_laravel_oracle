<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateDeclarationStartup">
    <h1>Modifier la déclaration de startup N° <?php echo $row['ID_DMD']; ?></h1>

    <div class="form-group">
      <input type="text" required="required" name="lieustartup" value="<?php echo $row['LIEU_STARTUP']  ?>" />
      <label for="textarea" class="control-label" style="left: 0;">Lieu startup</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="servicestartup" value="<?php echo $row['SERVICE_STARTUP']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Service startup</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="mondatstartup" value="<?php echo $row['MONDAT_STARTUP']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Mondat</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="capitalstartup" value="<?php echo $row['CAPITAL_STARTUP']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Plan de la startup</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <textarea required="required" name="descriptionDeclaration"><?php echo $row['DESCRIPTION_DMD']?></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Description déclaration</label><i class="bar"></i>
    </div>
    
    <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD']; ?>">

<div class="button-container">
    <button type="Submit" class="button"><span>Modifier la déclaration</span></button>
  </div>
  </form>
  
</div>
