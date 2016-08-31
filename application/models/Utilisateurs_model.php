<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Utilisateurs_model extends CI_Model{
		
		// Définition de la table utilisée
		protected $table = 'utilisateurs';
	
		/*
		 * Ajoute un utilisateur en base de données
		 * Retour : TRUE si une ligne à été affectée ou FALSE
		 */
		public function ajouter_utilisateur($data)
		{
			$this->db->insert($this->table, $data);
			
			return ($this->db->affected_rows() != 1) ? FALSE : TRUE;
		}
		
		/*
		 * Active le compte d'un utilisateur en fonction de son adresse email et de son token ID
		 * Paramètres :
		 * $adresse_email => Adresse email du compte à activer
		 * $token_id => Token_id du compte (vérification)
		 *
		 * Retour : TRUE si une ligne à été affectée ou FALSE
		 */
		public function activer_compte($adresse_email, $token_id){
			$data = array(
				"STATUT_COMPTE" => "ACTIF"
			);
			
			$this->db->where('ADRESSE_EMAIL', $adresse_email);
			$this->db->where('TOKEN_ID', $token_id);
			$this->db->update($this->table, $data);
			$rows = $this->db->affected_rows();
			
			return ($rows == 1) ? TRUE : FALSE;
		}
		
		/*
		 * Instancie un utilisateur en fonction de son adresse email
		 * Paramètres :
		 * $adresse_email => Adresse email du compte utilisateur à instancier
		 *
		 * Retour : Un objet utilisateur
		 */
		public function instancier_utilisateur($adresse_email = ""){
			
			// Récupération des données du compte
			$dataUser = $this->getDataUtilisateurByEmail($adresse_email);
			
			// Si aucune données récupérée
			if ($dataUser === FALSE) {
				
				// L'ID devient celui du visiteur
				$dataUser["ID_UTILISATEUR"] = 1;
			}
			
			// Chargement des librairies
			$this->load->library("utilisateur", $dataUser["ID_UTILISATEUR"]);
			
			// Création d'un nouvel utilisateur
			$utilisateur = new Utilisateur($dataUser["ID_UTILISATEUR"]);
			
			return $utilisateur;
		}
		
		/*
		 * Récupération des données du compte utilisateur par son adresse email
		 * Paramètres :
		 * $adresse_email => Adresse email du compte
		 *
		 * Retour : $donnees du compte ou FALSE
		 */
		public function getDataUtilisateurByEmail($adresse_email){
	 		 $this->db->select("*")
			 		  ->where('ADRESSE_EMAIL', $adresse_email);
			 
			 $resultat = $this->db->get($this->table);
			 
			 $donnees = $resultat->first_row('array');
			 return ($donnees["ADRESSE_EMAIL"] == 'visiteur') ? FALSE : $donnees;
		}
		
		/*
		 * Récupération des données du compte utilisateur par son ID
		 * Paramètres :
		 * $id => ID du compte 
		 *
		 * Retour : $donnees du compte ou FALSE
		 */
		public function getDataUtilisateurById($id){
	 		 $this->db->select("*")
			 		  ->where('ID_UTILISATEUR', $id);
			 
			 $resultat = $this->db->get($this->table);
			 
			 $donnees = $resultat->first_row('array');
			 
			 return ($donnees == NULL) ? FALSE : $donnees;
		}
	}
?>