<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Classe Email_templates
 * Description : Gestion des mails et de leur expédition
 */
class Email_templates
{
	/*
    |===============================================================================
    | Constructeur
    |===============================================================================
    */

    public function __construct()
    {
        $this->CI =& get_instance();
    }
	
	/*
	 * Fonction d'envoi du mail d'inscription
	 */
	public function inscription_validation($expediteur, $nom, $destinataires, $token_id, $sujet, $message, $cc = "", $bcc = ""){
		
		// Configuration de la librairie
		$config["mailtype"] = "html";
		
		// Chargement de la librairie d'envoi de mails
		$this->CI->load->library('email', $config);
		
		$this->CI->email->initialize($config);
		
		// Définition des paramètres de l'email
		// Expéditeur
		$this->CI->email->from($expediteur, $nom);
		
		// Destinataires
		$this->CI->email->to($destinataires); 
		
		// Destinataires en copie
		$this->CI->email->cc($cc); 
		
		// Destinataires en copie carbone 
		$this->CI->email->bcc($bcc); 
		
		// Sujet du mail
		$this->CI->email->subject($sujet);
		
		$message = "Vous vous êtes inscrit sur le site <a href='undershift.fr'>undershift.fr</a> et nous vous en remercions. Pour confirmer votre inscription merci de cliquer sur <a href='".base_url()."utilisateurs/confirmation/".urlencode($destinataires)."/".$token_id."'>ce lien</a>.";
		
		// Corps du mail
		$this->CI->email->message($this->generate_template("Bienvenue !", $message));	
		
		// Envoi du mail
		return $this->CI->email->send();
	}	
	
	function contact_copie_client($expediteur, $nom, $destinataires, $cc = "", $bcc = ""){
		// Configuration de la librairie
		$config["mailtype"] = "html";
		
		// Chargement de la librairie d'envoi de mails
		$this->CI->load->library('email', $config);
		
		$this->CI->email->initialize($config);
		
		// Définition des paramètres de l'email
		// Expéditeur
		$this->CI->email->from($expediteur, $nom);
		
		// Destinataires
		$this->CI->email->to($destinataires); 
		
		// Destinataires en copie
		$this->CI->email->cc($cc); 
		
		// Destinataires en copie carbone 
		$this->CI->email->bcc($bcc); 
		
		// Sujet du mail
		$this->CI->email->subject("Accusé de réception");
		
		$message = "Nous avons bien reçu votre email, un administrateur vous répondra sous 48 heures maximum. Merci de votre confiance. <br />Under shift";
		
		// Corps du mail
		$this->CI->email->message($this->generate_template("Reçu !", $message));	
		
		// Envoi du mail
		return $this->CI->email->send();
	}
	
	function contact_envoi_administrateur($expediteur, $nom, $destinataires, $sujet, $message, $cc = "", $bcc = ""){
		// Configuration de la librairie
		$config["mailtype"] = "html";
		
		// Chargement de la librairie d'envoi de mails
		$this->CI->load->library('email', $config);
		
		$this->CI->email->initialize($config);
		
		// Définition des paramètres de l'email
		// Expéditeur
		$this->CI->email->from($expediteur, $nom);
		
		// Destinataires
		$this->CI->email->to($destinataires); 
		
		// Destinataires en copie
		$this->CI->email->cc($cc); 
		
		// Destinataires en copie carbone 
		$this->CI->email->bcc($bcc); 
		
		// Sujet du mail
		$this->CI->email->subject($sujet);
		
		// Corps du mail
		$this->CI->email->message($this->generate_template("Nouveau message, ", $message));	
		
		// Envoi du mail
		return $this->CI->email->send();
	}
	/*
	 * Génération du template par defaut
	 * Paramètres : $titre => Titre du message (Bonjour par defaut)
	 *				$message => Message à envoyer
	 */
	function generate_template($titre = "Bonjour", $message = ""){
		$generated = '
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<!-- If you delete this meta tag, the ground will open and swallow you. -->
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Under Shift</title>
  </head>
  <body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important;height: 100%">

	<!-- HEADER -->
	<table class="head-wrap" style="background-color: rgb(200, 27, 27);margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
			<td class="header container" align="" style="margin: 0 auto !important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block !important;max-width: 600px !important;clear: both !important">

				<!-- /content -->
				<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block">
					<table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Titre Under Shift" src="'.img_url("email_templates/global/undershift.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
						</tr></table></div><!-- /content -->

			</td>
			<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
		</tr></table><!-- /HEADER --><!-- BODY --><table class="body-wrap" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
			<td class="container" style="margin: 0 auto !important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block !important;max-width: 600px !important;clear: both !important">

				<!-- content -->
				<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block">
					<table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">

								<h1 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 200;font-size: 44px">'.$titre.'</h1>
								<p class="lead" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 17px;line-height: 1.6">'.$message.'</p>
								</td>
							</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block">

						<table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td class="small" width="20%" style="vertical-align: top;padding-right: 10px;margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Facebook" src="'.img_url("email_templates/global/Facebook.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
								<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
									<h4 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 23px">Suivez-nous sur Facebook !</h4>
									<p style="background-color: rgb(236, 248, 255);padding: 15px;margin: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">Si vous "likez" notre page, vous aurez accès aux dernières actualités du groupe comme des infos sur les dates de concert, les albums, des jeux concours ou bien des titres en exclu ! Mais vous pouvez également avoir accès à toutes ces informations sur le site web.</p>
									<a class="btn" href="#" style="margin: 0;padding: 10px 16px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;text-decoration: none;background-color: #666;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block">Likez ! »</a>
								</td>
							</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block"><table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td class="small" width="20%" style="vertical-align: top;padding-right: 10px;margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Abonnement premium" src="'.img_url("email_templates/global/Fevorite.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
							<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
								<h4 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 23px">Découvrez l\'abonnement premium</h4>
								<p style="background-color: rgb(236, 248, 255);padding: 15px;margin: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">L\'abonnement premium, c\'est un pack qui contient du contenu unique comme des T-Shirt Dédicacés, des places offertes pour les concerts, un accés au backstage.. Vous aurez un statut VIP et serez informés avant tout le monde des évènements du groupe !</p>
								<a class="btn" href="#" style="margin: 0;padding: 10px 16px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;text-decoration: none;background-color: #666;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block">Devenir Premium ! »</a>
							</td>
						</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block"><table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td class="small" width="20%" style="vertical-align: top;padding-right: 10px;margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Speaker" src="'.img_url("email_templates/global/Speaker.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
							<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
								<h4 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 23px">Player musical</h4>
								<p style="background-color: rgb(236, 248, 255);padding: 15px;margin: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">Dans la rubrique "MEDIA -&gt; Player" du site vous pouvez écouter certaines démos du groupe en haute qualité. N\'hésitez pas à le découvrir, c\'est gratuit.</p>
								<a class="btn" style="margin: 0;padding: 10px 16px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;text-decoration: none;background-color: #666;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block">Ecoutez dès maintenant ! »</a>
							</td>
						</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block"><table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td class="small" width="20%" style="vertical-align: top;padding-right: 10px;margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Video" src="'.img_url("email_templates/global/Video.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
							<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
								<h4 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 23px">Envie de revivre un moment live ?</h4>
								<p style="background-color: rgb(236, 248, 255);padding: 15px;margin: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">Vous avez aimé un live et souhaitez le visionner de nouveau tout seul ou avec des amis ? Aucun problème ! Il n\'y a qu\'a aller dans la rubrique "CONCERT -&gt; Live vidéo" du site pour accéder aux vidéos live enregistrées par l\'équipe ! A vous de bouger maintenant !</p>
								<a class="btn" style="margin: 0;padding: 10px 16px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;text-decoration: none;background-color: #666;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block">Visionnez dès maintenant ! »</a>
							</td>
						</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block"><table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td class="small" width="20%" style="vertical-align: top;padding-right: 10px;margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><img alt="Euro" src="'.img_url("email_templates/global/Euro.png").'" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%" /></td>
							<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
								<h4 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 23px">Envie d\'un souvenir ?</h4>
								<p style="background-color: rgb(236, 248, 255);padding: 15px;margin: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">Vous souhaitez avoir un T-Shirt du groupe ? Un album ou des goodies ? Nous avons une boutique en ligne dédiée à la vente d\'accessoires du groupe ! Quelque chose manque dans la boutique ? Utilisez la rubrique "CONTACT" du site web pour nous en informer et nous feront le nécessaire pour l\'ajouter dans la boutique !</p>
								<a class="btn" style="margin: 0;padding: 10px 16px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;text-decoration: none;background-color: #666;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block">Achetez dès maintenant ! »</a>
							</td>
						</tr></table></div><!-- /content -->

					<!-- content -->
					<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block">
						<table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">

									<!-- social & contact -->
									<table class="social" width="100%" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;background-color: #ebebeb;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">

												<!--- column 1 -->
												<div class="column" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 280px;float: left;min-width: 279px">
													<table align="left" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">				

																<h5 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 900;font-size: 17px">Restez connecté :</h5>
																<p style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">
																<a href="https://www.facebook.com/pages/Under-Shift/148835128508161" class="soc-btn fb" style="margin: 0;padding: 3px 7px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;font-size: 12px;margin-bottom: 10px;text-decoration: none;font-weight: bold;display: block;text-align: center;background-color: #3B5998 !important">Facebook</a> 
																<a href="#" class="soc-btn tw" style="margin: 0;padding: 3px 7px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;font-size: 12px;margin-bottom: 10px;text-decoration: none;font-weight: bold;display: block;text-align: center;background-color: #1daced !important">Twitter</a> 
																<a href="#" class="soc-btn tw" style="margin: 0;padding: 3px 7px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;font-size: 12px;margin-bottom: 10px;text-decoration: none;font-weight: bold;display: block;text-align: center;background-color: #DB4A39 !important">Google +</a> </p>


															</td>
														</tr></table><!-- /column 1 --></div>

												<!--- column 2 -->
												<div class="column" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 280px;float: left;min-width: 279px">
													<table bgcolor="" cellpadding="" align="left" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">				

																<h5 style="margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 900;font-size: 17px">Informations de Contact :</h5>												
																<p style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">Téléphone : <strong style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">07.82.87.96.06</strong><br style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif" />
																	Email: <strong style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><a href="mailto:undershiftgroupe@gmail.com" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB">undershiftgroupe@gmail.com</a></strong></p>

																</td>
															</tr></table><!-- /column 2 --></div>

													<div class="clear" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block;clear: both"></div>

												</td>
											</tr></table><!-- /social & contact --></td>
								</tr></table></div><!-- /content -->


					</td>
					<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
				</tr></table><!-- /BODY --><!-- FOOTER --><table class="footer-wrap" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;clear: both !important"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
					<td class="container" style="margin: 0 auto !important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block !important;max-width: 600px !important;clear: both !important">

						<!-- content -->
						<div class="content" style="margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block">
							<table style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%"><tr style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"><td align="center" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">
										<p style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6">
											<a href="#" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB">Terms</a> |
											<a href="#" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB">Privacy</a> |
											<a href="#" style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB"><unsubscribe style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif">Se désinscrire</unsubscribe></a>
										</p>
									</td>
								</tr></table></div><!-- /content -->

					</td>
					<td style="margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif"></td>
				</tr></table><!-- /FOOTER --></body>
</html>
';
return $generated;
	}
}