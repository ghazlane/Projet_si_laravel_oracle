<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateDeclarationInvention">
    <h1>Modifier la déclaration d'invention N° <?php echo $row['ID_DMD']; ?></h1>

    <div class="form-group">
      <input type="text" required="required" name="categorieInvention" value="<?php echo $row['CATEGORIE_INVENTION']  ?>" />
      <label for="input" class="control-label" style="left: 0;" >Categorie invention</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="objetInvention" value="<?php echo $row['OBJET_INVENTION']  ?>" />
      <label for="input" class="control-label" style="left: 0;" >Objet invention</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="classement" value="<?php echo $row['CLASSEMENT']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Classement</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <textarea required="required" name="descriptionInvention"><?php echo $row['DESCRIPTION_INVENTION']  ?></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Description invention</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <textarea required="required" name="descriptionDeclaration"><?php echo $row['DESCRIPTION_DMD']  ?></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Description déclaration</label><i class="bar"></i>
    </div>
    <input type="hidden" name="id_dmd" value="<?php echo $row['ID_DMD']; ?>">


<div class="button-container">
    <button type="Submit" class="button"><span>Valider la Modification</span></button>
  </div>
  </form>
  
</div>


