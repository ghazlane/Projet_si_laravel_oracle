<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateProfesseur">
    <h1>Modifier les données du professeur N° <?php echo $row['CODE_PROF'] ; ?></h1>
    <div class="form-group">
      <input type="text" required="required" name="nom_prof" value="<?php echo $row['NOM_PROF'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;" >Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_prof" value="<?php echo $row['PRENOM_PROF'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Prénom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_prof" value="<?php echo $row['DATE_NAISSANCE_PROF'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date de naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_prof" value="<?php echo $row['EMAIL_PROF'] ; ?>" readonly="true"/>
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="telephone_prof" value="<?php echo $row['TELEPHONE_PROF'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="num_aff" value="<?php echo $row['NUM_AFF'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>

    <div class="checkbox">
      <label style="font-size: 17px;" >
        <input type="checkbox" onclick="modifierMotDePasse()" id="updatePassword" name="updatePassword" /><i class="helper"></i>Modifier le mot de passe
      </label>
    </div>
  <input type="hidden" name="id_gu" value="<?php echo $row['CODE_PROF'] ; ?>">

    <div id="changeMotdepasse">
      <div class="form-group">
      <input type="password" required="required" name="ancien_password_PROF" value="<?php echo $row['MOT_DE_PASSE_PROF'] ; ?>" value="null" />
      <label for="input" class="control-label" style="left: 0;">Ancien Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="new_password_gu" value="<?php echo $row['MOT_DE_PASSE_PROF'] ; ?>" value="null"/>
      <label for="input" class="control-label" style="left: 0;">Nouveau mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" value="null"/>
      <label for="input" class="control-label" style="left: 0;" >Confirmer le mot de passe</label><i class="bar"></i>
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