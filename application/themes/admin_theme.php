<!DOCTYPE html>
<html> 
	<head>
	
	    <!-- Titre de la page
	    ========================================================================= -->
		<title><?php echo $titre; ?></title>
		
		<link href="<?php echo css_url("application.min"); ?>" rel="stylesheet">
		
	    <!-- Favicon de la page
	    ========================================================================= -->
	    <link rel="icon" type="image/png" href="<?php echo img_url("favicon.png") ?>" title="Favicon">
		
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="<?php echo $meta_description; ?>">
	    <meta name="author" content="Nicolas PAMART">
	    <meta charset="utf-8">
	    <script>
	        /*
	           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
	                      https://code.google.com/p/chromium/issues/detail?id=332189
	        */
	    </script>
		
		<!-- Appel des CSS -->
		<?php foreach($css as $url): ?>
			<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
		<?php endforeach; ?>

	</head>

	<body class="background-dark">
		<div class="logo">
        <h4><a href="index.html"><strong>Under Shift </strong>| Administration</a></h4>
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="index.html"><i class="fa fa-home"></i> <span class="name">Tableau de bord</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url("admin/accueil_evenements") ?>"><i class="fa fa-calendar"></i> <span class="name">Gestion des évènements</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url("admin/accueil_actualites") ?>"><i class="fa fa-newspaper-o"></i> <span class="name">Gestion des actualités</span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="index.html#ui-collapse"><i class="fa fa-magic"></i> <span class="name">Messages &nbsp;</span><span class="label label-important">3</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="ui_buttons.html">Boîte de réception</a></li>
                        <li class=""><a href="ui_dialogs.html">Envoyés</a></li>
                        <li class=""><a href="ui_accordion.html">Corbeille</a></li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Se déconnecter</span></a>
                </li>
            </ul>
        
            
        </nav>    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="index.html#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="index.html#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="index.html#" class="message">
                                    <img src="img/1.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="message">
                                    <img src="img/2.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="message">
                                    <img src="img/3.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="index.html#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="index.html#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="index.html#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="index.html#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index.html#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Rechercher...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="index.html#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="index.html#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        
		<div class="content container">
            
        <?php foreach($tabFlashMessage as $flashMessage): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <i class="fa fa-<?php echo $flashMessage['logo'];?>"></i> <?php echo $flashMessage['message'];?>
            </div>
        <?php endforeach; ?>
		
		<!-- Contenu de la page appelée -->
		<?php echo $output; ?>
		
		
            </div>
                <div class="loader-wrap hiding hide">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
            </div>
        
        <!-- common templates -->
        <script type="text/template" id="settings-template">
            <div class="setting clearfix">
                <div>Background</div>
                <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                    <% dark = background == 'dark'; light = background == 'light';%>
                    <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
                    <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
                </div>
            </div>
            <div class="setting clearfix">
                <div>Sidebar on the</div>
                <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                    <% onRight = sidebar == 'right'%>
                    <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
                    <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
                </div>
            </div>
            <div class="setting clearfix">
                <div>Sidebar</div>
                <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                    <% display = displaySidebar%>
                    <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
                    <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
                </div>
            </div>
            <div class="setting clearfix">
                <div>White Version</div>
                <div>
                    <a href="../transparent/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </script>
        
        <script type="text/template" id="sidebar-settings-template">
            <% auto = sidebarState == 'auto'%>
            <% if (auto) {%>
            <button type="button"
                    data-value="icons"
                    class="btn-icons btn btn-transparent btn-sm">Icons</button>
            <button type="button"
                    data-value="auto"
                    class="btn-auto btn btn-transparent btn-sm">Auto</button>
            <%} else {%>
            <button type="button"
                    data-value="auto"
                    class="btn btn-transparent btn-sm">Auto</button>
            <% } %>
        </script>

        <!-- page template -->
        <script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="img/2.jpg" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>
        <!-- Appel des scripts -->
		<?php foreach($js as $url): ?>
			<script type="text/javascript" src="<?php echo $url; ?>"></script> 
		<?php endforeach; ?>

</body>
</html>