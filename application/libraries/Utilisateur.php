<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
	// Déclaration des variables
    private $CI;
	private $id;
    private $pseudo;
	private $nom;
	private $prenom;
	private $mot_de_passe;
	private $adresse_postale;
	private $code_postal;
    private $ville;
    private $adresse_email;
    private $numero_de_telephone;
    private $adresse_ip_derniere_connexion;
    private $date_inscription;
    private $type_abonnement;
    private $date_souscription;
    private $role;
    private $statut_compte;
    private $token_id;
    private $registered;

    /*
    |===============================================================================
    | Constructeur
    |===============================================================================
    */

    public function __construct($id = "1")
    {
        $CI =& get_instance();
        
        // Chargement du modèle utilisateur
        $CI->load->model("utilisateurs_model");
        
        $dataUser = $CI->utilisateurs_model->getDataUtilisateurById($id);
        
        $this->id = (int)$dataUser["ID_UTILISATEUR"];
        $this->pseudo = $dataUser["PSEUDO"];
        $this->nom = $dataUser["NOM"];
        $this->prenom = $dataUser["PRENOM"];
        $this->adresse_postale = $dataUser["ADRESSE_POSTALE"];
        $this->code_postal = $dataUser["CODE_POSTAL"];
        $this->ville = $dataUser["VILLE"];
        $this->adresse_email = $dataUser["ADRESSE_EMAIL"];
        $this->numero_de_telephone = $dataUser["NUMERO_DE_TELEPHONE"];
        $this->adresse_ip_derniere_connexion = $dataUser["ADRESSE_IP_DERNIERE_CONNEXION"];
        $this->date_inscription = $dataUser["DATE_INSCRIPTION"];
        $this->type_abonnement = $dataUser["TYPE_ABONNEMENT"];
        $this->date_souscription = $dataUser["DATE_SOUSCRIPTION"];
        $this->role = $dataUser["ROLE"];
        $this->statut_compte = $dataUser["STATUT_COMPTE"];
        $this->token_id = $dataUser["TOKEN_ID"];
        if($dataUser["ADRESSE_EMAIL"] == "visiteur"){
            $this->registered = FALSE;
        } else $this->registered = TRUE;
    }
    
    /*
     * Fonction d'inscription d'un utilisateur
     */
    public function inscrire($pseudo, $nom, $prenom, $adresse_postale, $code_postal, $ville, $adresse_email, $numero_de_telephone, $adresse_ip_derniere_connexion, $mot_de_passe, $role, $token_id)
	{
         $CI =& get_instance();
         $CI->load->model("utilisateurs_model");
        // Création du tableau contenant les informations à propos de l'utilisateur
		$tableau_utilisateur = array(
			"ID_UTILISATEUR"		            =>		"",
            "PSEUDO"                            =>      $pseudo,
			"NOM"		                        =>		$nom,
			"PRENOM"	                        =>		$prenom,
			"ADRESSE_POSTALE"		            =>		$adresse_postale,
			"CODE_POSTAL"			            =>		$code_postal,
			"VILLE"		                        =>		$ville,
			"ADRESSE_EMAIL"		                =>		$adresse_email,
			"NUMERO_DE_TELEPHONE"		        =>		$numero_de_telephone,
			"ADRESSE_IP_DERNIERE_CONNEXION"	    =>		$adresse_ip_derniere_connexion,
			"MOT_DE_PASSE"		                =>		$mot_de_passe,
            "DATE_INSCRIPTION"                  =>      "",
			"TYPE_ABONNEMENT"		            =>		"",
            "DATE_SOUSCRIPTION"                 =>      "",    
			"ROLE"	                            =>		$role,
            "STATUT_COMPTE"                     =>      "INACTIF",
			"TOKEN_ID"		                    =>		$token_id
		);
        
        // Insertion des données dans la table "utilisateurs"
		$resultat = $CI->utilisateurs_model->ajouter_utilisateur($tableau_utilisateur);
        
        return $resultat;
	}
    
    public function activer_compte($adresse_email, $token_id){
        $this->CI =& get_instance();
        
        return $this->CI->utilisateurs_model->activer_compte($adresse_email, $token_id);
    }
    
    public function connexion_utilisateur($adresse_email, $mot_de_passe){
        $dataUser = $this->CI->utilisateurs_model->getDataUtilisateurByEmail($adresse_email);
    }
    
    public function estAuthentifie(){
        return ($this->registered === TRUE) ? TRUE : FALSE;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $nom
     */
    public function setPseudo($pseudo)
    {
        $this->nom = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getAdressePostale()
    {
        return $this->adresse_postale;
    }

    /**
     * @param mixed $adresse_postale
     */
    public function setAdressePostale($adresse_postale)
    {
        $this->adresse_postale = $adresse_postale;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param mixed $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return mixed
     */
    public function getAdresseEmail()
    {
        return $this->adresse_email;
    }

    /**
     * @param mixed $adresse_email
     */
    public function setAdresseEmail($adresse_email)
    {
        $this->adresse_email = $adresse_email;
    }

    /**
     * @return mixed
     */
    public function getNumeroDeTelephone()
    {
        return $this->numero_de_telephone;
    }

    /**
     * @param mixed $numero_de_telephone
     */
    public function setNumeroDeTelephone($numero_de_telephone)
    {
        $this->numero_de_telephone = $numero_de_telephone;
    }

    /**
     * @return mixed
     */
    public function getAdresseIpDerniereConnexion()
    {
        return $this->adresse_ip_derniere_connexion;
    }

    /**
     * @param mixed $adresse_ip_derniere_connexion
     */
    public function setAdresseIpDerniereConnexion($adresse_ip_derniere_connexion)
    {
        $this->adresse_ip_derniere_connexion = $adresse_ip_derniere_connexion;
    }

    /**
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->date_inscription;
    }

    /**
     * @param mixed $date_inscription
     */
    public function setDateInscription($date_inscription)
    {
        $this->date_inscription = $date_inscription;
    }

    /**
     * @return mixed
     */
    public function getTypeAbonnement()
    {
        return $this->type_abonnement;
    }

    /**
     * @param mixed $type_abonnement
     */
    public function setTypeAbonnement($type_abonnement)
    {
        $this->type_abonnement = $type_abonnement;
    }

    /**
     * @return mixed
     */
    public function getDateSouscription()
    {
        return $this->date_souscription;
    }

    /**
     * @param mixed $date_souscription
     */
    public function setDateSouscription($date_souscription)
    {
        $this->date_souscription = $date_souscription;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $droits_compte
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getStatutCompte()
    {
        return $this->statut_compte;
    }

    /**
     * @param mixed $statut_compte
     */
    public function setStatutCompte($statut_compte)
    {
        $this->statut_compte = $statut_compte;
    }

    /**
     * @return mixed
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * @param mixed $token_id
     */
    public function setTokenId($token_id)
    {
        $this->token_id = $token_id;
    }
}