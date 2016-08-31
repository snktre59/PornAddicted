<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Loca'Gestion | Connexion</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?php echo base_url(); ?>assets/frontend/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/frontend/css/global.css" type="text/css" rel="stylesheet" media="screen,projection">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
   <!-- Custome CSS-->    
   <link href="<?php echo base_url(); ?>assets/frontend/css/login_register.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="cyan loaded">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  
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
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">perm_identity</i>
            <input id="NOM" name="NOM" type="text" value="<?php echo set_value('NOM'); ?>">
            <label for="NOM" class="center-align">Nom</label>
          </div>
        </div>
        <?php echo form_error('NOM'); ?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">perm_identity</i>
            <input id="PRENOM" name="PRENOM" type="text" value="<?php echo set_value('PRENOM'); ?>">
            <label for="PRENOM" class="center-align">Prénom</label>
          </div>
        </div>
        <?php echo form_error('PRENOM'); ?>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix">perm_identity</i>
                <select name="ROLE">
                    <option value="" disabled selected>Je suis...</option>
                    <option value="PROPRIETAIRE">Je suis propriétaire</option>
                    <option value="LOCATAIRE">Je suis locataire</option>
                </select>
            </div>
        </div>
        <?php echo form_error('ROLE'); ?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="ADRESSE_EMAIL" name="ADRESSE_EMAIL" type="text" value="<?php echo set_value('ADRESSE_EMAIL'); ?>">
            <label for="ADRESSE_EMAIL" class="center-align">Adresse email</label>
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
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">call</i>
            <input id="NUMERO_DE_TELEPHONE" name="NUMERO_DE_TELEPHONE" type="tel" value="<?php echo set_value('NUMERO_DE_TELEPHONE'); ?>">
            <label for="NUMERO_DE_TELEPHONE" class="center-align">Numéro de téléphone</label>
          </div>
        </div>
        <?php echo form_error('NUMERO_DE_TELEPHONE'); ?>
        <div class="row">
            <div class="input-field col s1">
                <i class="material-icons prefix">store</i>
            </div>
            <div class="input-field col s5">
                <input id="ADRESSE_POSTALE" name="ADRESSE_POSTALE" type="text" value="<?php echo set_value('ADRESSE_POSTALE'); ?>">
                <label for="ADRESSE_POSTALE">Adresse</label>
            </div>
            <div class="input-field col s3">
                <input id="VILLE" name="VILLE" type="text" value="<?php echo set_value('VILLE'); ?>">
                <label for="VILLE">Ville</label>
            </div>
            <div class="input-field col s2">
                <input id="CODE_POSTAL" name="CODE_POSTAL" type="text" value="<?php echo set_value('CODE_POSTAL'); ?>">
                <label for="CODE_POSTAL">Code Postal</label>
            </div>
        </div>
        <?php echo form_error('ADRESSE_POSTALE')." ".form_error('VILLE')." ".form_error('CODE_POSTAL'); ?>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Inscription</button>
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


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/javascript/jquery-2.1.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/javascript/materialize.min.js"></script>
  <!-- Script de la page -->
  <script type="text/javascript" src="<?php echo js_url("utilisateurs/inscription"); ?>"></script>
  
