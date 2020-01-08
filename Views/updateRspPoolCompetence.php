<?php $row = $statement->fetch();?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateResponsablePoolCompetences">
    <h1>Ajouter utilisateur Responsable pool de compétences</h1>

    <div class="form-group">
      <input type="text" required="required" name="nom_rsp_pc" value="<?php echo $row['NOM_RESP_PC']; ?>" />
      <label for="input" class="control-label" style="left: 0;">Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_rsp_pc" value="<?php echo $row['PRENOM_RESP_PC']; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Prenom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_rsp_pc" value="<?php echo $row['DATE_NAISSANCE_PC']; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_resp_pc" value="<?php echo $row['EMAIL_RESP_PC']; ?>" readonly/>
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>


      <div class="checkbox">
      <label style="font-size: 17px;" >
        <input type="checkbox" onclick="modifierMotDePasse()" id="updatePassword" name="updatePassword" /><i class="helper"></i>Modifier le mot de passe
      </label>
    </div>
  <input type="hidden" name="id_rsp_pc_2" value="<?php echo $row['ID_RESP_PC'] ; ?>">

    <div id="changeMotdepasse">
      <div class="form-group">
      <input type="password" required="required" name="ancien_password_rsp_pc" value="null" />
      <label for="input" class="control-label" style="left: 0;">Ancien Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="new_password_rsp_pc"  value="null"/>
      <label for="input" class="control-label" style="left: 0;">Nouveau mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" value="null"/>
      <label for="input" class="control-label" style="left: 0;" >Confirmer mot de passe</label><i class="bar"></i>
    </div>
  </div>

    <div class="form-group">
      <input type="number" required="required" name="num_telephone_rsp_pc" value="<?php echo $row['TELEPHONE_PC']; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <select name="id_rsp_pc">
        <?php while($row2 = $pc->fetch() ){?>
          <?php if($row2['ID_PC'] == $row['ID_PC']) {?>
        <option selected value="<?php echo $row2['ID_PC'];?>"><?php echo $row2['NOM_PC'];  ?></option>
      <?php }else {?>
        <option  value="<?php echo $row2['ID_PC'];?>"><?php echo $row2['NOM_PC'];  ?></option>
        <?php }}?>
      </select>
      <label for="select" class="control-label">Pool de competence</label><i class="bar"></i>
    </div>

<div class="button-container">
    <button type="Submit" class="button"><span>Enregistrer responsable PC</span></button>
  </div>
  </form>
  
</div>

<script type="text/javascript">
      document.getElementById("changeMotdepasse").style.display ="none";
    document.getElementById("changeMotdepasse").style.visibility = "none";
  function modifierMotDePasse(){
    if(document.getElementById("updatePassword").checked == true){
      document.getElementById("changeMotdepasse").style.display ="inline";
    document.getElementById("changeMotdepasse").style.visibility = "visible";
    }
    else{
      document.getElementById("changeMotdepasse").style.display ="none";
    document.getElementById("changeMotdepasse").style.visibility = "none";
    } 
  }

</script>