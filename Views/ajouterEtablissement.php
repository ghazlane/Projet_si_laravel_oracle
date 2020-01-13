<div class="container">
  <form method="post" action="index.php?action=saveAjoutEtablissement">
    <h1>Ajouter Un Etablissement</h1>

    <div class="form-group">
      <input type="text" required="required" name="nom" />
      <label for="input" class="control-label" style="left: 0;">Nom de Etablissement</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="nb_ense" />
      <label for="input" class="control-label" style="left: 0;">Nombre des enseignants </label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="nb_cher" />
      <label for="input" class="control-label" style="left: 0;">Nombre de chercheurs </label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="nb_fil" />
      <label for="input" class="control-label" style="left: 0;">Nombre de fillières </label><i class="bar"></i>
    </div>
    <div class="form-group">
      <select name="id_pn">
        <?php while($row = $statement->fetch() ){?>
        <option value="<?php echo $row['ID_PN'];?>"><?php echo $row['NOM_PN'];  ?></option>
        <?php }?>
      </select>
      <label for="select" class="control-label">Point nodal</label><i class="bar"></i>
    </div>
    

<div class="button-container">
    <button type="Submit" class="button"><span>Ajouter le Etablissement</span></button>
  </div>
  </form>
  
</div>

