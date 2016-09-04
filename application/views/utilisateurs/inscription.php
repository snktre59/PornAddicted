<!-- End Page Loading -->
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <?php $attributs = array('id' => 'FORMULAIRE_INSCRIPTION', 'class' => 'login-form'); ?>
        <?php echo form_open("", $attributs); ?>
        <!--<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">-->
        <div class="row">
          <div class="input-field col s12 center">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo img_url("logo.png"); ?>" alt="Logo Loca' Gestion" class="responsive-img valign profile-image-login"></a>
            <p class="center login-form-text">Créez votre espace</p>
          </div>
        </div>
        <div class="row s6">
          <div class="input-field col s12">
            <i class="material-icons prefix">perm_identity</i>
            <input id="PSEUDO" name="PSEUDO" type="text" value="<?php echo set_value('PSEUDO'); ?>">
            <label for="PSEUDO">Pseudonyme</label>
          </div>
        </div>
        <?php echo form_error('PSEUDO'); ?>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="ADRESSE_EMAIL" name="ADRESSE_EMAIL" type="text" value="<?php echo set_value('ADRESSE_EMAIL'); ?>">
            <label for="ADRESSE_EMAIL">Adresse email</label>
          </div>
        </div>
        <?php echo form_error('ADRESSE_EMAIL'); ?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="pwd" name="MOT_DE_PASSE" type="password" >
            <label for="pwd">Mot de passe</label>
            <div id="pwd_strength_wrap">
                <div id="passwordDescription">Mot de passe non saisi</div>
                <div id="passwordStrength" class="strength0"></div>
                <div id="pswd_info">
                        <strong>Astuces :</strong>
                        <ul>
                                <li class="invalid" id="length">Au moins 6 caractères</li>
                                <li class="invalid" id="pnum">Au moins un nombre</li>
                                <li class="invalid" id="capital">Au moins une lettre minuscule &amp; une lettre majuscule</li>
                                <li class="invalid" id="spchar">Au moins un caractère spécial</li>
                        </ul>
                </div><!-- END pswd_info -->
           </div><!-- END pwd_strength_wrap -->

            </div>
        </div>
        <?php echo form_error('MOT_DE_PASSE'); ?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="MOT_DE_PASSE_CONFIRMATION" name="MOT_DE_PASSE_CONFIRMATION" type="password">
            <label for="MOT_DE_PASSE_CONFIRMATION">Mot de passe (Confirmation)</label>
          </div>
        </div>
        <?php echo form_error('MOT_DE_PASSE_CONFIRMATION'); ?>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12 btn-rose">Inscription</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?php echo base_url(); ?>">Retour au site</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin medium-small" style="float: right;"><a href="<?php echo base_url("utilisateurs/connexion"); ?>">Déjà un compte ? Connectez-vous !</a></p>
          </div>  
        </div>
        

      <?php echo form_close(); ?>
    </div>
  </div>