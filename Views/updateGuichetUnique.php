<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateGuichetUnique">
    <h1>Modifier utilisateur guichet unique N° <?php echo $row['ID_GU'] ; ?></h1>
    <div class="form-group">
      <input type="text" required="required" name="nom_gu" value="<?php echo $row['NOM_GU'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;" >Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_gu" value="<?php echo $row['PRENOM_GU'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Prenom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_gu" value="<?php echo $row['DATE_NAISSANCE_GU'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_gu" value="<?php echo $row['EMAIL_GU'] ; ?>" readonly="true"/>
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="num_telephone_gu" value="<?php echo $row['TELEPHONE_GU'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>

    <div class="checkbox">
      <label style="font-size: 17px;" >
        <input type="checkbox" onclick="modifierMotDePasse()" id="updatePassword" name="updatePassword" /><i class="helper"></i>Modifier le mot de passe
      </label>
    </div>
  <input type="hidden" name="id_gu" value="<?php echo $row['ID_GU'] ; ?>">

    <div id="changeMotdepasse">
      <div class="form-group">
      <input type="password" required="required" name="ancien_password_gu" value="<?php echo $row['DATE_NAISSANCE_GU'] ; ?>" value="null" />
      <label for="input" class="control-label" style="left: 0;">Ancien Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="new_password_gu" value="<?php echo $row['DATE_NAISSANCE_GU'] ; ?>" value="null"/>
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