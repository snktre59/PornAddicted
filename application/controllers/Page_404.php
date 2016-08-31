<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Classe Page_404
 */
class Page_404 extends CI_Controller {

	/*
	 * Définition du constructeur de la classe
	 */ 
	public function __construct(){  
           parent::__construct();         
  	}    
  
  	/*
	 * Action en charge d'afficher la page d'erreur 404
	 */
	public function index()
	{
		$this->output->set_status_header('404');  
		
		// Affichage de la vue 
		$this->layout->view('erreurs/page_404');
	}
}
