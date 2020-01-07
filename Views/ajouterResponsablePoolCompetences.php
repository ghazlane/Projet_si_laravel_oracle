<div class="container">
  <form method="post" action="index.php?action=saveAjouterResponsablePoolCompetences">
    <h1>Ajouter utilisateur Responsable pool de compétences</h1>

    <div class="form-group">
      <input type="text" required="required" name="nom_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Prenom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Date naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="password_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" />
      <label for="input" class="control-label" style="left: 0;">Confirmer mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="num_telephone_rsp_pc" />
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <select name="id_rsp_pc">
        <?php while($row = $statement->fetch() ){?>
        <option value="<?php echo $row['ID_PC'];?>"><?php echo $row['NOM_PC'];  ?></option>
        <?php }?>
      </select>
      <label for="select" class="control-label">Pool de competence</label><i class="bar"></i>
    </div>

<div class="button-container">
    <button type="Submit" class="button"><span>Ajouter utilisateur PC</span></button>
  </div>
  </form>
  
</div>