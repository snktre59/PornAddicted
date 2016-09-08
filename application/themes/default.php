<html>
    <head>
		<!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	    <!-- META TAGS
	    ========================================================================= -->
	    <meta name="description" content="<?php echo $meta_description; ?>">
	
	    <!-- Title Tag
	    ========================================================================= -->
		<title><?php echo $titre; ?></title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
		
		<!-- Browser Specical Files
	    ========================================================================= -->
	    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<!-- Site Favicon
	    ========================================================================= -->
	    <link rel="icon" type="image/png" href="<?php echo img_url("favicon.png") ?>" title="Favicon">
		
		<!-- WP HEAD
	    ========================================================================= 
	    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>-->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<?php foreach($css as $url): ?>
			<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php echo $url; ?>" />
		<?php endforeach; ?>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="grey darken-3">
            <div class="nav-wrapper">
                <a href="<?php echo base_url(); ?>" class="brand-logo center"><!--<img src="<?php echo img_url("logo/porn_addicted.png"); ?>" alt="Porn Addicted logo" class="logo" onmouseover="this.src='<?php echo img_url("logo/porn_addicted_hover.png"); ?>'" onmouseout="this.src='<?php echo img_url("logo/porn_addicted.png"); ?>'"/> --></a>
                <ul class="left hide-on-med-and-down">
                    <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."videos/categories"; ?>"><i class="material-icons left">dashboard</i>Catégories</a></li>
                        <li><a href="<?php echo base_url()."videos/notees"; ?>"><i class="material-icons left">stars</i>Mieux notées</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">videocam</i>Les + vues</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">dashboard</i>Catégories</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">stars</i>Mieux notées</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">videocam</i>Les + vues</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="right hide-me-on-med-and-down">
                    <li><a href="#" class="dropdown" data-activates='login'><i class="material-icons">recent_actors</i></a></li>

                        <!-- Dropdown Structure -->
                        <ul id='login' class='dropdown-content'>
                        <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                            <li class="grey darken-3"><a href="<?php echo base_url("utilisateurs/connexion"); ?>"><i class="material-icons left">person</i> Se connecter</a></li>
                            <li class="grey darken-3"><a href="<?php echo base_url("utilisateurs/inscription"); ?>"><i class="material-icons left">person_add</i> S'inscrire</a></li>
                        <?php else: ?>
                            <li class="grey darken-3"><a href="<?php echo base_url("videos/publier"); ?>"><i class="material-icons left">person</i> Publier une vidéo</a></li>
                            <li class="grey darken-3"><a href="<?php echo base_url("utilisateurs/profil"); ?>"><i class="material-icons left">person</i> Mon profil</a></li>
                            <li class="grey darken-3"><a href="<?php echo base_url("utilisateurs/deconnexion"); ?>"><i class="material-icons left">power_settings_new</i> Se déconnecter</a></li>
                        <?php endif; ?>
                        </ul>
                    <li><div class="nav-wrapper" id="search-bar">
                        <form>
                            <div class="input-field">
                            <input id="search" type="search" required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div></li>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."videos/categories"; ?>"><i class="material-icons left">dashboard</i>Catégories</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">stars</i>Mieux notées</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">videocam</i>Les + vues</a></li>
                        <li><a href="<?php echo base_url("utilisateurs/connexion"); ?>"><i class="material-icons left">person</i> Se connecter</a></li>
                        <li><a href="<?php echo base_url("utilisateurs/inscription"); ?>"><i class="material-icons left">person_add</i> S'inscrire</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."videos/categories"; ?>"><i class="material-icons left">dashboard</i>Catégories</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">stars</i>Mieux notées</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">videocam</i>Les + vues</a></li>
                        <li><a href="<?php echo base_url("videos/publier"); ?>"><i class="material-icons left">person</i> Publier une vidéo</a></li>
                        <li><a href="<?php echo base_url("utilisateurs/profil"); ?>"><i class="material-icons left">person</i> Mon profil</a></li>
                        <li><a href="<?php echo base_url("utilisateurs/deconnexion"); ?>"><i class="material-icons left">power_settings_new</i> Se déconnecter</a></li>
                    <?php endif; ?>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons left">reorder</i></a>
            </div>
            </nav>
        </div>
        
        <div class="row" id="left-sidebar-row">
            
            <div class="col s12" id="main-container"> <!-- Note that "m8 l9" was added -->
                <?php foreach($tabFlashMessage as $flashDataMessage): ?>
                    <div id="card-alert" class="card <?php echo $flashDataMessage["statut"]; ?>">
                      <div class="card-content white-text">
                        <p><i class="material-icons left"><?php echo $flashDataMessage["logo"]; ?></i> <?php echo $flashDataMessage["message"]; ?></p>
                      </div>
                    </div>
                <?php endforeach; ?>
                <?php echo $output; ?>
                
            </div>
        </div>
        
		
        
        <?php foreach($js as $url): ?>
            <script type="text/javascript" src="<?php echo $url; ?>"></script> 
        <?php endforeach; ?>
        
        <script type="text/javascript">
            $(".button-collapse").sideNav();
        </script>
        
        <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Un site conçu par <a href="http://www.e-contrast.fr" class="white-text">E-Contrast</a>
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </body>
</html>