<?php $row = $statement->fetch(); ?>
<div class="container">
  <form method="post" action="index.php?action=saveUpdateEtudiant">
    <h1>Modifier les données du professeur N° <?php echo $row['CODE_ET'] ; ?></h1>
    <div class="form-group">
      <input type="text" required="required" name="nom_et" value="<?php echo $row['NOM_ET'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;" >Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_et" value="<?php echo $row['PRENOM_ET'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Prénom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_et" value="<?php echo $row['DATE_NAISSANCE_ET'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Date de naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_et" value="<?php echo $row['EMAIL_ET'] ; ?>" readonly="true"/>
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="telephone_et" value="<?php echo $row['TELEPHONE_ET'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="etablissement" value="<?php echo $row['ETABLISSEMENT'] ; ?>"/>
      <label for="input" class="control-label" style="left: 0;">etablissement</label><i class="bar"></i>
    </div>

    <div class="checkbox">
      <label style="font-size: 17px;" >
        <input type="checkbox" onclick="modifierMotDePasse()" id="updatePassword" name="updatePassword" /><i class="helper"></i>Modifier le mot de passe
      </label>
    </div>
  <input type="hidden" name="code_et" value="<?php echo $row['CODE_ET'] ; ?>">

    <div id="changeMotdepasse">
      <div class="form-group">
      <input type="password" required="required" name="ancien_password_et" value="<?php echo $row['MOT_DE_PASSE_ET'] ; ?>" value="null" />
      <label for="input" class="control-label" style="left: 0;">Ancien Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="new_password_et" value="<?php echo $row['MOT_DE_PASSE_ET'] ; ?>" value="null"/>
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