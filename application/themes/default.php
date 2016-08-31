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
            <nav class="deep-orange accent-3">
            <div class="nav-wrapper">
                <a href="<?php echo base_url(); ?>" class="brand-logo">Loca'Gestion</a>
                <ul class="right hide-on-med-and-down">
                    <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">work</i>Espace Propriétaire</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i>Espace Locataire</a></li>
                    <?php else: ?>
                        <li><a href="sass.html"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a class='dropdown NOTIFICATIONS' data-beloworigin="true" href='#' data-activates='notifications-dropdown'><i class="material-icons">notifications</i></a></li>
                            
                            <ul id="notifications-dropdown" class="dropdown-content" style="white-space: nowrap; position: absolute; top: 128px; left: 1372px; opacity: 1; display: none;">
                                <li>
                                    <h5>NOTIFICATIONS <span class="new badge orange">5</span></h5>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                                </li>
                                <li>
                                    <a href="#!"><i class="material-icons left">work</i> Completed the task</a>
                                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                                </li>
                                <li>
                                    <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                                </li>
                                <li>
                                    <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                                </li>
                                <li>
                                    <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                                </li>
                            </ul>
                        <li><a href="<?php echo base_url("utilisateurs/deconnexion"); ?>"><i class="material-icons">power_settings_new</i></a></li>
                    <?php endif; ?>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                        <li><a href="<?php echo base_url(); ?>"><i class="material-icons left">store</i>Accueil</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">work</i>Espace Propriétaire</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i>Espace Locataire</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo base_url("tableau_de_bord"); ?>"><span><i class="material-icons left">trending_down</i><span>Tableau de bord</a></li>
                        <li><a href="<?php echo base_url()."locataires"; ?>"><i class="material-icons left">perm_identity</i> Locataires</a></li>
                        <li><a href="<?php echo base_url()."locations"; ?>"><i class="material-icons left">business</i> Locations</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">work</i> Etat des lieux</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">query_builder</i> Rendez-vous</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i> Interventions</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">textsms</i> Messages</a></li>
                        <li><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i> Calculatrice</a></li>
                    <?php endif; ?>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons left">reorder</i></a>
            </div>
            </nav>
        </div>
        
        <div class="row" id="left-sidebar-row">

            <div id="left-navbar" class="col s2"style="overflow:auto"> <!-- Note that "m4 l3" was added -->
                <ul>
                    <?php if(!$utilisateurCourant->estAuthentifie()): ?>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url(); ?>"><span><i class="material-icons left">store</i><span>Accueil</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">work</i>Espace Propriétaire</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i>Espace Locataire</a></li>
                    <?php else: ?>
                    <li class="user-details cyan darken-2" style="height: 97px!important;">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="<?php echo img_url("avatar.jpg"); ?>" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" id="name-left" href="#" data-activates="profile-dropdown"><i class="material-icons left">arrow_drop_down</i><?php echo $utilisateurCourant->getPrenom()." ".$utilisateurCourant->getNom(); ?></a>
                                <ul id="profile-dropdown" class="dropdown-content" style="width: 127px; position: absolute; top: 57px; left: 101.234375px; opacity: 1; display: none;">
                                    <li><a href="#"><i class="material-icons">account_circle</i> Mon profil</a>
                                    </li>
                                    <li><a href="#"><i class="material-icons">settings</i> Paramètres</a>
                                    </li>
                                    <li><a href="#"><i class="material-icons">help</i> Aide</a>
                                    </li>
                                    <li><a href="<?php echo base_url("utilisateurs/deconnexion"); ?>"><i class="material-icons">power_settings_new</i> Déconnexion</a>
                                    </li>
                                </ul>
                                <p class="user-roal"><?php echo $utilisateurCourant->getRole(); ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url("tableau_de_bord"); ?>"><span><i class="material-icons left">trending_down</i><span>Tableau de bord</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."locataires"; ?>"><i class="material-icons left">perm_identity</i> Locataires</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."locations"; ?>"><i class="material-icons left">business</i> Locations</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">work</i> Etat des lieux</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">query_builder</i> Rendez-vous</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i> Interventions</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">textsms</i> Messages</a></li>
                    <li class="waves-effect waves-light"><a href="<?php echo base_url()."utilisateurs/connexion"; ?>"><i class="material-icons left">vpn_key</i> Calculatrice</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            
            <div class="col s10" id="main-container"> <!-- Note that "m8 l9" was added -->
                <?php foreach($tabFlashMessage as $flashDataMessage): ?>
                    <div id="card-alert" class="card <?php echo $flashDataMessage["statut"]; ?>">
                      <div class="card-content white-text">
                        <p><i class="material-icons left"><?php echo $flashDataMessage["logo"]; ?></i> <?php echo $flashDataMessage["message"]; ?></p>
                      </div>
                    </div>
                <?php endforeach; ?>
                <?php echo $output; ?>
                
                <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large red">
                    <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                    <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Tableau de bord"><i class="material-icons">insert_chart</i></a></li>
                    <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Messages"><i class="material-icons">question_answer</i></a></li>
                    <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Rendez-vous"><i class="material-icons">today</i></a></li>
                    <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Mes locataires"><i class="material-icons">group</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
		
        
        <?php foreach($js as $url): ?>
            <script type="text/javascript" src="<?php echo $url; ?>"></script> 
        <?php endforeach; ?>
        
        <script type="text/javascript">
            $(".button-collapse").sideNav();
        </script>
        
        <footer class="page-footer deep-orange accent-3">
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