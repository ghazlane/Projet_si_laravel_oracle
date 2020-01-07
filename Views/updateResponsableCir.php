<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateResponsableCir">
    <h1>Modifier Responsable CIR N° <?php echo $row['ID_CIR'] ; ?></h1>
    <div class="form-group">
      <input type="text" required="required" name="nom_cir" value="<?php echo $row['NOM_CIR'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;" >Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_cir" value="<?php echo $row['PRENOM_CIR'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Prenom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_cir" value="<?php echo $row['DATE_NAISSANCE_CIR'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_cir" value="<?php echo $row['EMAIL_CIR'] ; ?>" readonly="true"/>
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="num_telephone_cir" value="<?php echo $row['TELEPHONE_CIR'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>

    <div class="checkbox">
      <label style="font-size: 17px;" >
        <input type="checkbox" onclick="modifierMotDePasse()" id="updatePassword" name="updatePassword" /><i class="helper"></i>Modifier le mot de passe
      </label>
    </div>
  <input type="hidden" name="id_cir" value="<?php echo $row['ID_CIR'] ; ?>">

    <div id="changeMotdepasse">
      <div class="form-group">
      <input type="password" required="required" name="ancien_password_cir" value="<?php echo $row['DATE_NAISSANCE_CIR'] ; ?>" value="null" />
      <label for="input" class="control-label" style="left: 0;">Ancien Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="new_password_cir" value="<?php echo $row['DATE_NAISSANCE_CIR'] ; ?>" value="null"/>
      <label for="input" class="control-label" style="left: 0;">Nouveau mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" value="null"/>
      <label for="input" class="control-label" style="left: 0;" >Confirmer mot de passe</label><i class="bar"></i>
    </div>
  </div>


    
    

<div class="button-container">
    <button type="Submit" class="button"><span>Enregistrer les modifications </span></button>
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