<div class="container">
  <form method="post" action="index.php?action=modifierDeclarationBrevet&id=<?php echo $row['ID_DMD']  ?>">
    <h1>Déclaration de Brevet</h1>

    <div class="form-group">
      <input type="text" required="required" name="nomBrevet" value="<?php echo $row['NOM_BREVET']  ?>" />
      <label for="textarea" class="control-label" style="left: 0;">Nom Brevet</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="categorieBrevet" value="<?php echo $row['CATEGORIE_BREVET']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Categorie Brevet</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="domaineBrevet" value="<?php echo $row['DOMAINE_BREVET']  ?>"/>
      <label for="input" class="control-label" style="left: 0;">Domaine Brevet</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <textarea required="required" name="descriptionDeclaration" value="<?php echo $row['DESCRIPTION_DMD']  ?>"></textarea>
      <label for="textarea" class="control-label" style="left: 0;">Description déclaration</label><i class="bar"></i>
    </div>


<div class="button-container">
    <button type="Submit" class="button"><span>Modifier la déclaration</span></button>
  </div>
  </form>
  
</div>
