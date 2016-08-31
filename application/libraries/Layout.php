<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Classe Layout
 * Description : Customisation du coeur de CodeIgniter
 */
class Layout
{
	// Déclaration des variables
	private $CI;
	private $var = array();
	private $theme = 'default';
	private $racine;
	public $utilisateurCourant;
	
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
	
	public function __construct()
	{
		$this->CI =& get_instance();
		
		if (! $this->CI->session->userdata("utilisateurCourant")){
			$this->CI->load->model("utilisateurs_model");
			
			$this->utilisateurCourant = $this->CI->utilisateurs_model->instancier_utilisateur("visiteur");
			
			$this->CI->session->set_userdata("utilisateurCourant", $this->utilisateurCourant);
		}
		
		$this->utilisateurCourant = $this->CI->session->userdata("utilisateurCourant");
		
		// Récupération des 5 premières lettres du controlleur appelé
		$this->racine = substr($this->CI->router->fetch_class(), 0, 5);
		
		// Définition du thème en fonction de la racine
		($this->racine == "admin") ? $this->theme = 'admin_theme' : $this->theme = "default";
		
		// Déclaration des vues en sortie
		$this->var['output'] = '';
		
		// Déclaration des vues en sortie
		$this->var['utilisateurCourant'] = $this->utilisateurCourant;
		
		//	Le titre est composé du nom de la méthode et du nom du contrôleur
		//	La fonction ucfirst permet d'ajouter une majuscule
		$this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
		
		$this->var['meta_description'] = "";
		
		// Définition du charset à celui de CodeIgniter par defaut
		$this->var['charset'] = $this->CI->config->item('charset');
		
		// Définition d'un tableau de ressources CSS
		$this->var['css'] = array();
		
		// Définition d'un tableau de ressources JAVASCRIPT'
		$this->var['js'] = array();
		
		// Gestion du flash message
        $this->var['tabFlashMessage'] = $this->get_flashdata_messages();
		
		// Si le contrôleur ADMIN est appelé
		if($this->racine == "admin"){
			
			// Ajout des ressources JAVASCRIPT
			// $this->ajouter_js("jquery-2.1.1.min");
			// $this->ajouter_js("lib/jquery-pjax/jquery.pjax");
		// Si le contrôleur appelé n'est pas ADMIN'
		} else {
			
			// Ajout des ressources CSS
			$this->ajouter_css("materialize.min");
            $this->ajouter_css("global");
			
			// Ajout des ressources JAVASCRIPT
			$this->ajouter_js("jquery-2.1.1.min");
            $this->ajouter_js("materialize.min");
			$this->ajouter_js("accueil/accueil");
		}
	}
	
	/*
	 * Méthode ajoutant une vue en sortie et affichage par CI
	 */	
	public function view($name, $data = array())
	{
		$data["utilisateurCourant"] = $this->utilisateurCourant;
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		
		$this->CI->load->view('../themes/' . $this->theme, $this->var);
	}
    
    /*
	 * Méthode affichant une vue sans le thème
	 */	
	public function blank_view($name, $data = array())
	{
        //array_merge($data, $this->var);
		foreach($this->var as $key => $value){
			$data[$key] = $value;
		}
		
		$this->CI->load->view($name, $data);
	}
	
	/*
	 * Méthode ajoutant ajoutant une vue en sortie
	 */	
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}
	
	/*
	 * Définition du THEME
	 * Retour : TRUE ou FALSE
	 */	
	public function set_theme($theme)
	{
		// Si la variable theme est une chaîne de caractères et que le fichier existe
		if(is_string($theme) AND !empty($theme) AND file_exists('./application/themes/' . $theme . '.php'))
		{
			//Définition du thème
			$this->theme = $theme;
			return true;
		}
		return false;
	}
	
	/*
	 * Définition du TITRE
	 * Retour : TRUE ou FALSE
	 */	
	public function set_titre($titre)
	{
		// Si la variable titre est une chaîne de caractères non vide
		if(is_string($titre) AND !empty($titre))
		{	
			// Définition du titre
			$this->var['titre'] = $titre;
			return true;
		}
		return false;
	}
	
	/*
	 * Définition de la META-DESCRIPTION
	 * Retour : TRUE ou FALSE
	 */	
	public function set_meta_description($meta_description)
	{
		// Si la variable titre est une chaîne de caractères non vide
		if(is_string($meta_description) AND !empty($meta_description))
		{	
			// Définition du titre
			$this->var['meta_description'] = $meta_description;
			return true;
		}
		return false;
	}
	
	/*
	 * Définition du CHARSET
	 * Retour : TRUE ou FALSE
	 */	
	public function set_charset($charset)
	{
		// Si la variable charset est une chaîne de caractères non vide
		if(is_string($charset) AND !empty($charset))
		{
			// Définition du charset
			$this->var['charset'] = $charset;
			return true;
		}
		return false;
	}
	
	/*
	 * Ajout de messages en session
	 * Retour : Tableau de données
	 */	
	public function set_flashdata_message($statut, $message)
	{
			// Définition du logo en fonction de type de message
			if ($statut == "green"){
				$logo = "done";
			} elseif ($statut == "red") {
				$logo = "error_outline";
			} elseif ($statut == "blue") {
				$logo = "info_outline";
			} else {
				$logo = "warning";
			}
				
		$this->tabMessage[] = array('statut' => $statut, 'message' => $message, 'logo' => $logo);
        $this->CI->session->set_flashdata('tabMessage', $this->tabMessage);
	}
	
	/*
	 * Récupération de la liste des messages en flashdata
	 * Retour : Bloc HTML
	 */	
	public function get_flashdata_messages()
	{
			// Si le contrôleur N'EST PAS ADMIN
			if ($this->racine != "admin"){
			
				$tabMessage = $this->CI->session->flashdata('tabMessage');
		        if (empty($tabMessage) === FALSE) {
		            return ($tabMessage);
		        } else {
		            return (array());
		        }
			// Si le contrôleur est ADMIN
			} else {
				
				$tabMessage = $this->CI->session->flashdata('tabMessage');
		        if (empty($tabMessage) === FALSE) {
		            return ($tabMessage);
		        } else {
		            return (array());
		        }
			}
	}
	
	/*
	 * Méthode ajoutant une ressource CSS
	 * Retour : TRUE ou FALSE
	 */	
	public function ajouter_css($nom)
	{	
		// Si le contrôleur N'EST PAS ADMIN
		if ($this->racine != "admin"){
			
			// Si le nom du fichier est une chaîne de caractères et que le chemin existe
			if(is_string($nom) AND !empty($nom) AND file_exists('./assets/frontend/css/' . $nom . '.css'))
			{
				// Ajout du fichier CSS au tableau
				$this->var['css'][] = css_url($nom);
				return true;
			}
		// Le contrôleur est ADMIN
		} elseif ($this->racine == "admin") {
			
			// Si le nom du fichier est une chaîne de caractères et que le chemin existe
			if(is_string($nom) AND !empty($nom) AND file_exists('./assets/backend/css/' . $nom . '.css'))
			{
				// Ajout du fichier CSS au tableau
				$this->var['css'][] = css_url($nom);
				return true;
			}
		}
		return false;
	}
	
	/*
	 * Méthode ajoutant une ressource JAVASCRIPT
	 * Retour : TRUE ou FALSE
	 */	
	public function ajouter_js($nom)
	{
		// Le contrôleur N'EST PAS ADMIN
		if ($this->racine != "admin") {
			
			// Si le nom du fichier est une chaîne de caractères et que le chemin existe
			if (is_string($nom) AND !empty($nom) AND file_exists('./assets/frontend/javascript/' . $nom . '.js'))
			{
				// Ajout du fichier au tableau
				$this->var['js'][] = js_url($nom);
				return true;
			}
		// Le contrôleur est ADMIN
		} elseif ($this->racine == "admin"){
			
			// Si le nom du fichier est une chaîne de caractères et que le chemin existe
			if (is_string($nom) AND !empty($nom) AND file_exists('./assets/backend/javascript/' . $nom . '.js'))
			{
				// Ajout du fichier au tableau
				$this->var['js'][] = js_url($nom);
				return true;
			}
		}
		return false;
	}
}