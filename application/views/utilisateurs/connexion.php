<!-- End Page Loading -->
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <?php $attributs = array('id' => 'FORMULAIRE_CONNEXION', 'class' => 'login-form'); ?>
        <?php echo form_open("", $attributs); ?>
        <!--<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">-->
        <div class="row">
          <div class="input-field col s12 center">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo img_url("logo.png"); ?>" alt="Logo Loca' Gestion" class="responsive-img valign profile-image-login"></a>
            <p class="center login-form-text">Connectez-vous à votre espace</p>
          </div>
        </div>
        
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
            <input id="MOT_DE_PASSE" name="MOT_DE_PASSE" type="password">
            <label for="MOT_DE_PASSE">Mot de passe (Confirmation)</label>
          </div>
        </div>
        <?php echo form_error('MOT_DE_PASSE'); ?>

        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" name="REMEMBER" id="remember-me">
              <label for="remember-me">Se souvenir de moi</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12 btn-rose">Connexion</button>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?php echo base_url(); ?>">Mot de passe oublié ?</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin medium-small" style="float: right;"><a href="<?php echo base_url("utilisateurs/inscription"); ?>">Pas de compte ? Inscrivez-vous !</a></p>
          </div>  
        </div>
        

      <?php echo form_close(); ?>
    </div>
  </div>