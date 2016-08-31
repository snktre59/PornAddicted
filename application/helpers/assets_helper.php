<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Méthode permettant de récupérer l'URL d'une ressource CSS
 * Paramètres : $Nom => Nom de la ressource à ajouter
 */
if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		$CI =& get_instance();
		$racine = substr($CI->router->fetch_class(), 0, 5);
		return ($racine != "admin") ? base_url() . 'assets/frontend/css/' . $nom . '.css' :  base_url() . 'assets/backend/css/' . $nom . '.css';
	}
}

/*
 * Méthode permettant de récupérer l'URL d'une ressource JAVASCRIPT
 * Paramètres : $Nom => Nom de la ressource à ajouter
 */
if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		$CI =& get_instance();
		$racine = substr($CI->router->fetch_class(), 0, 5);
		return ($racine != "admin") ? base_url() . 'assets/frontend/javascript/' . $nom . '.js' : base_url() . 'assets/backend/javascript/' . $nom . '.js';
	}
}

/*
 * Méthode permettant de récupérer l'URL d'une image
 * Paramètres : $Nom => Nom de la ressource à ajouter
 */
if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		$CI =& get_instance();
		$racine = substr($CI->router->fetch_class(), 0, 5);
		return ($racine != "admin") ? base_url() . 'assets/frontend/images/' . $nom : base_url() . 'assets/backend/images/' . $nom;
	}
}

/*
 * Méthode permettant de récupérer l'URL d'une ressource musicale
 * Paramètres : $Nom => Nom de la ressource à ajouter
 */
if ( ! function_exists('music_url'))
{
	function music_url($nom)
	{
		$CI =& get_instance();
		$racine = substr($CI->router->fetch_class(), 0, 5);
		return ($racine != "admin") ? base_url() . 'assets/frontend/music/' . $nom : base_url() . 'assets/backend/music/' . $nom;
	}
}

/*
 * Méthode permettant d'afficher une balise image'
 * Paramètres : $Nom => Nom de la ressource à ajouter
 *				$alt => Texte s'affichant lorsque l'image n'est pas accessible
 *				$class => Classe à ajouter à la balise
 				$style => Ajout d'un style particulier à la balise
 */
if ( ! function_exists('img'))
{
	function img($nom, $alt = '', $class = '', $style = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" class="' . $class . '" style="' . $style . '" />';
	}
}