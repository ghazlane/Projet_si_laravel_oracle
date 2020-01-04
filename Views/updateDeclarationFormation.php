<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateDeclarationFormation">
    <h1>Modifier la déclaration de formation N° <?php echo $row['ID_DMD']; ?></h1>

    <div class="form-group">
      <input type="text" required="required" name="sujetFormation" value="<?php echo $row['SUJET_FORMATION']  ?>" />
      <label for="textarea" class="control-label" style="left: 0;">Sujet Formation</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="themeFormation" value="<?php echo $row['THEME_FORMATION']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Theme formation</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="nombreParticipants" value="<?php echo $row['NOMBRE_PARTICIPANTS']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Nombre participants</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="planFormation" value="<?php echo $row['PLAN_FORMATION']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Plan de la formation</label><i class="bar"></i>
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
