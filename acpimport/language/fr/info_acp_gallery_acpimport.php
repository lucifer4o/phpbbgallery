<?php
/**
*
* @package Gallery - ACP Import Extension [French]
* @copyright (c) 2012 nickvergessen - http://www.flying-bits.org/
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translator fr (c) pokyto aka le.poke http://www.lestontonsfraggers.com inspired by darky - http://www.foruminfopc.fr/ and Team http://www.phpbb-fr.com/
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_IMPORT_ALBUMS'				=> 'Importer des images',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'Vous pouvez importer ici des images à partir du système de fichier. Avant d’importer des images, n’oubliez pas de les redimensionner manuellement.',

	'IMPORT_ALBUM'					=> 'Importer les images de l’album:',
	'IMPORT_DEBUG_MES'				=> '%1$s images importées. Il y a encore %2$s images restantes.',
	'IMPORT_DIR_EMPTY'				=> 'Le dossier %s est vide. Vous devez charger des images, avant de pouvoir les importer.',
	'IMPORT_FINISHED'				=> 'Les %1$s images ont été importées avec succès.',
	'IMPORT_FINISHED_ERRORS'		=> 'Les %1$s images ont été importées avec succès, mais les erreurs suivantes se sont produites :<br /><br />',
	'IMPORT_MISSING_ALBUM'			=> 'Merci de sélectionner l’album où les images seront importées.',
	'IMPORT_SELECT'					=> 'Choisissez les images que vous souhaitez importer. Les images chargées avec succès sont supprimées. Toutes les autres images sont encore disponibles.',
	'IMPORT_SCHEMA_CREATED'			=> 'Le schéma d’importation a été créé avec succès. Merci de patienter pendant que les images sont importées.',
	'IMPORT_USER'					=> 'Chargées par',
	'IMPORT_USER_EXP'				=> 'Vous pouvez charger des images d’un autre utilisateur.',
	'IMPORT_USERS_PEGA'				=> 'Charger pour les utilisateurs de la galerie personnelle.',

	'MISSING_IMPORT_SCHEMA'			=> 'Le schéma d’importation spécifié (%s) n’a pas pu être trouvé.',

	'NO_FILE_SELECTED'				=> 'Vous devez sélectionner au moins un fichier.',
));
?>
