<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller
{

	public function index()
	{
		
		// Définition du titre de la page
		$this->layout->set_titre("Loca'Gestion - Gérez votre contrat que vous soyez propriétaire ou locataire !");
		
		//Définition de la meta-description
		$this->layout->set_meta_description("Retrouvez les dernières actualités du groupe, les prochains évènements et bien plus encore !");
		
		// Récupération des derniers évènements
		//$data["tableau_evenements"] = $this->evenements_model->recuperer_evenement_limit();
		
		// Récupération des dernières actualités
		//$data["tableau_actualites"] = $this->actualites_model->recuperer_actualite_limit();
		
		// Affichage du template
		$this->layout->view('accueil/accueil');
	}
}