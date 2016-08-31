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
      <?php $attributs = array('id' => 'FORMULAIRE_CONNEXION', 'class' => 'login-form'); ?>
        <?php echo form_open("", $attributs); ?>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo img_url("logo.png"); ?>" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Connexion à votre espace</p>
          </div>
        </div>
        
        <?php foreach($tabFlashMessage as $flashDataMessage): ?>
            <div id="card-alert" class="card <?php echo $flashDataMessage["statut"]; ?>">
              <div class="card-content white-text">
                <p><i class="material-icons left"><?php echo $flashDataMessage["logo"]; ?></i> <?php echo $flashDataMessage["message"]; ?></p>
              </div>
            </div>
        <?php endforeach; ?>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">perm_identity</i>
            <input id="ADRESSE_EMAIL" type="text" name="ADRESSE_EMAIL" value="<?php echo set_value('ADRESSE_EMAIL'); ?>">
            <label for="ADRESSE_EMAIL" class="center-align">Adresse email</label>
          </div>
        </div>
        <?php echo form_error('ADRESSE_EMAIL'); ?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="MOT_DE_PASSE" name="MOT_DE_PASSE" type="password" value="<?php echo set_value('MOT_DE_PASSE'); ?>">
            <label for="MOT_DE_PASSE">Mot de passe</label>
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
            <button class="btn waves-effect waves-light col s12" type="submit">Connexion</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?php echo base_url("utilisateurs/inscription"); ?>">Inscrivez-vous !</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="<?php echo base_url("utilisateurs/forgot"); ?>">Mot de passe oublié ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/javascript/jquery-2.1.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/javascript/materialize.min.js"></script>