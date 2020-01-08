<div class="container">
  <form method="post" action="index.php?action=saveAjoutResponsableCir">
    <h1>Ajouter reponsable CIR</h1>

    <div class="form-group">
      <input type="text" required="required" name="nom_cir" />
      <label for="input" class="control-label" style="left: 0;">Nom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required" name="prenom_cir" />
      <label for="input" class="control-label" style="left: 0;">Prenom</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="date"  name="date_naissance_cir" />
      <label for="input" class="control-label" style="left: 0;">Date naissance</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="email" required="required" name="email_cir" />
      <label for="input" class="control-label" style="left: 0;">Email</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" name="password_cir" />
      <label for="input" class="control-label" style="left: 0;">Mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" required="required" />
      <label for="input" class="control-label" style="left: 0;">Confirmer mot de passe</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="number" required="required" name="num_telephone_cir" />
      <label for="input" class="control-label" style="left: 0;">Numéro de téléphone</label><i class="bar"></i>
    </div>

<div class="button-container">
    <button type="Submit" class="button"><span>Ajouter utilisateur</span></button>
  </div>
  </form>
  
</div>