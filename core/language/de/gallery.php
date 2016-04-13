<?php
/**
*
* gallery [Deutsch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Übersetzt von franki (http://dieahnen.de/ahnenforum/)
**/

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
	'ADD_UPLOAD_FIELD'				=> 'Weitere Felder zum Hochladen hinzufügen',
	'ALBUM'							=> 'Album',
	'ALBUM_IS_CATEGORY'				=> 'Das Album, in welches du dich gemogelt hast, ist eine Kategorie.<br />In Kategorien können keine Bilder hochgeladen werden.',
	'ALBUM_LOCKED'					=> 'Gesperrt',
	'ALBUM_NAME'					=> 'Name des Albums',
	'ALBUM_NOT_EXIST'				=> 'Dieses Album existiert nicht',
	'ALBUM_PERMISSIONS'				=> 'Berechtigungen in diesem Album',
	'ALBUM_REACHED_QUOTA'			=> 'Dieses Album hat das Kontingent zum Hochladen von Bildern erreicht. Es können keine weiteren Bilder mehr hochgeladen werden.<br />Für weitere Information wende dich bitte an einen Administrator',
	'ALBUM_UPLOAD_NEED_APPROVAL'		=> 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Allerdings müssen deine Bilder erst durch einen Administrator oder Moderator freigeschaltet werden.',
	'ALBUM_UPLOAD_NEED_APPROVAL_ERROR'	=> 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Allerdings müssen deine Bilder erst durch einen Administrator oder Moderator freigeschaltet werden.<br /><br /><span class="error">%s</span>',
	'ALBUM_UPLOAD_SUCCESSFUL'		=> 'Dein Bild wurde erfolgreich hochgeladen.',
	'ALBUM_UPLOAD_SUCCESSFUL_ERROR'	=> 'Dein Bild wurde erfolgreich hochgeladen.<br /><br /><span class="error">%s</span>',
	'ALBUMS_MARKED'					=> 'Alle Alben wurden als gelesen markiert.',
	'ALL'							=> 'Alle',
	'ALL_IMAGES'					=> 'Alle Bilder',
	'ALLOW_COMMENTS'				=> 'Kommentare für dieses Bild erlauben.',
	'ALLOW_COMMENTS_ARY'			=> array(
		0	=> 'Kommentare für dieses Bild erlauben.',
		2	=> 'Kommentare für diese Bilder erlauben.',
	),
	'ALLOWED_FILETYPES'				=> 'Erlaubte Dateitypen',
	'APPROVE'						=> 'Freigeben',
	'DISAPPROVE'					=> 'Sperren',
	'APPROVE_IMAGE'					=> 'Bild freischalten',

	//@todo
	'ALBUM_COMMENT_CAN'				=> 'Du <strong>darfst</strong> Bilder in diesem Album kommentieren',
	'ALBUM_COMMENT_CANNOT'			=> 'Du <strong>darfst keine</strong> Bilder in diesem Album kommentieren',
	'ALBUM_DELETE_CAN'				=> 'Du <strong>darfst</strong> deine Bilder in diesem Album löschen',
	'ALBUM_DELETE_CANNOT'			=> 'Du <strong>darfst</strong> deine Bilder in diesem Album <strong>nicht</strong> löschen',
	'ALBUM_EDIT_CAN'				=> 'Du <strong>darfst</strong> deine Bilder in diesem Album bearbeiten',
	'ALBUM_EDIT_CANNOT'				=> 'Du <strong>darfst</strong> deine Bilder in diesem Album <strong>nicht</strong> bearbeiten',
	'ALBUM_RATE_CAN'				=> 'Du <strong>darfst</strong> Bilder in diesem Album bewerten',
	'ALBUM_RATE_CANNOT'				=> 'Du <strong>darfst keine</strong> Bilder in diesem Album bewerten',
	'ALBUM_UPLOAD_CAN'				=> 'Du <strong>darfst</strong> neue Bilder in diesem Album hochladen',
	'ALBUM_UPLOAD_CANNOT'			=> 'Du <strong>darfst keine</strong> neuen Bilder in diesem Album hochladen',
	'ALBUM_VIEW_CAN'				=> 'Du <strong>darfst</strong> Bilder in diesem Album ansehen',
	'ALBUM_VIEW_CANNOT'				=> 'Du <strong>darfst keine</strong> Bilder in diesem Album ansehen',

	'BAD_UPLOAD_FILE_SIZE'			=> 'Deine hochgeladene Datei ist entweder zu gross oder defekt',
	'BBCODES'						=> 'BBCodes',
	'BROWSING_ALBUM'				=> 'Mitglieder in diesem Album: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Mitglieder in diesem Album: %1$s und %2$d Gast',
	'BROWSING_ALBUM_GUESTS'			=> 'Mitglieder in diesem Album: %1$s und %2$d Gäste',

	'CHANGE_AUTHOR'					=> 'Benutzer ändern',
	'CHANGE_IMAGE_STATUS'			=> 'Bildstatus ändern',
	'CHARACTERS'					=> 'Buchstaben',
	'CLICK_RETURN_ALBUM'			=> 'Klicke %shier%s um zum Album zurückzukehren',
	'CLICK_RETURN_IMAGE'			=> 'Klicke %shier%s um zum Bild zurückzukehren',
	'CLICK_RETURN_INDEX'			=> 'Klicke %shier%s um zum Index zurückzukehren',
	'COMMENT'						=> 'Kommentar',
	'COMMENT_IMAGE'					=> 'Schreibt einen Kommentar über ein Bild im Album %s',
	'COMMENT_LENGTH'				=> 'Gib deinen Kommentar hier ein. Er darf nicht mehr als <strong>%d</strong> Zeichen enthalten.',
	'COMMENT_ON'					=> 'Kommentar zu',
	'COMMENT_STORED'				=> 'Dein Kommentar wurde erfolgreich hinzugefügt.',
	'COMMENT_TOO_LONG'				=> 'Dein Kommentar ist zu lang',
	'COMMENTS'						=> 'Kommentare',
	'CONTEST_COMMENTS_STARTS'		=> 'Kommentare sind auf Grund des Wettbewerbs erst ab dem %s erlaubt.',
	'CONTEST_ENDED'					=> 'Dieser Wettbewerb endete am %s.',
	'CONTEST_ENDS'					=> 'Dieser Wettbewerb endet am %s.',
	'CONTEST_RATING_STARTED'		=> 'Die Bewertung für diesen Wettbewerb begann am %s.',
	'CONTEST_RATING_STARTS'			=> 'Die Bewertung für diesen Wettbewerb beginnt am %s.',
	'CONTEST_RATING_ENDED'			=> 'Die Bewertung für diesen Wettbewerb endete am %s.',
	'CONTEST_RATING_HIDDEN'			=> 'versteckt',
	'CONTEST_RESULT'				=> 'Wettbewerb',
	'CONTEST_RESULT_1'				=> 'Sieger',
	'CONTEST_RESULT_2'				=> 'Zweiter',
	'CONTEST_RESULT_3'				=> 'Dritter',
	'CONTEST_RESULT_HIDDEN'			=> 'Die Bewertung des Bildes ist bis zum Ende des Wettbewerbs am %s versteckt.',
	'CONTEST_STARTED'				=> 'Der Wettbewerb begann am %s.',
	'CONTEST_STARTS'				=> 'Der Wettbewerb beginnt am %s.',
	'CONTEST_USERNAME'				=> '<strong>Wettbewerb</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Wettbewerb</strong> » Der Benutzername wird bis zum Ende des Wettbewerbs am %s versteckt.',
	'CONTEST_IMAGE_DESC'			=> '<strong>Wettbewerb</strong> » Die Beschreibung wird bis zum Ende des Wettbewerbs am %s versteckt.',
	'CONTEST_WINNERS_OF'			=> 'Sieger des Wettbewerbs „%s“',
	'CONTINUE'						=> 'Fortsetzen',

	'DATABASE_NOT_UPTODATE'			=> 'Deine Datenbank hat nicht die gleiche Version wie deine Dateien. Bitte aktualisiere deine Datenbank.',
	'DELETE_COMMENT'				=> 'Kommentar löschen',
	'DELETE_COMMENT2'				=> 'Kommentar löschen?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Bist Du Dir sicher das Du den Kommentar löschen möchtest?',
	'DELETE_IMAGE'					=> 'Löschen',
	'DELETE_IMAGE2'					=> 'Das Bild löschen?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Bist Du Dir sicher das Du das Bild löschen möchtest?',
	'DELETED_COMMENT'				=> 'Kommentar gelöscht',
	'DELETED_COMMENT_NOT'			=> 'Kommentar wurde nicht gelöscht',
	'DELETED_IMAGE'					=> 'Bild wurde gelöscht',
	'DELETED_IMAGE_NOT'				=> 'Bild wurde nicht gelöscht',
	'DESC_TOO_LONG'					=> 'Deine Beschreibung ist zu lang',
	'DESCRIPTION_LENGTH'			=> 'Gib deine Beschreibung hier ein. Sie darf nicht mehr als <strong>%d</strong> Zeichen enthalten.',
	'DETAILS'						=> 'Details',
	'DISALLOWED_EXTENSION'			=> 'Diese Bild-Erweiterung ist nicht erlaubt',
	'DONT_RATE_IMAGE'				=> 'Bild nicht bewerten',

	'EDIT_COMMENT'					=> 'Kommentar ändern',
	'EDIT_IMAGE'					=> 'Bearbeiten',
	'EDITED_TIME_TOTAL'				=> 'Zuletzt bearbeitet von %s am %s; insgesamt %d mal bearbeitet',
	'EDITED_TIMES_TOTAL'			=> 'Zuletzt bearbeitet von %s am %s; insgesamt %d mal bearbeitet',

	'FILE'							=> 'Datei',
	'FILE_SIZE'						=> 'Dateigröße',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Der Datei-Typ von „<strong>%1$s</strong>“ Stimmt nicht mit dem Mime-Typ (%2$s) überein.',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',
	'FILETYPES_ZIP'					=> 'zip',

	'FULL_EDITOR'					=> 'Voll-Editor',

	'GALLERY_IMAGE'					=> 'Bild',
	'GALLERY_IMAGES'					=> 'Bilder',
	'GALLERY_VIEWS'					=> 'Betrachtet',

	'IGNORE_NOTUPTODATE_MESSAGE'	=> 'In 7 Tagen wieder erinnern',
	'IMAGE_ALREADY_REPORTED'		=> 'Das Bild wurde bereits gemeldet.',
	'IMAGE_BBCODE'					=> 'BBCode',
	'IMAGE_COMMENTS_DISABLED'		=> 'Kommentare wurden für dieses Bild deaktiviert.',
	'IMAGE_DAY'						=> '%.2f Bilder pro Tag',
	'IMAGE_DESC'					=> 'Bildbeschreibung',
	'IMAGE_HEIGHT'					=> 'Bildhöhe',
	'IMAGE_INSERTED'				=> 'Bild eingefügt',
	'IMAGE_LOCKED'					=> 'Entschuldigung, aber dieses Bild wurde gesperrt. Du kannst für dieses Bild keine Kommentare mehr abgeben.',
	'IMAGE_NAME'					=> 'Bildname',
	'IMAGE_NOT_EXIST'				=> 'Dieses Bild existiert nicht',
	'IMAGE_PCT'						=> '%.2f%% aller Bilder',
	'IMAGE_STATUS'					=> 'Status',
	'IMAGE_URL'						=> 'Bildlink',
	'IMAGE_VIEWS'							=> 'Views',
	'IMAGE_WIDTH'					=> 'Bildbreite',
	'IMAGES_REPORTED_SUCCESSFULLY'	=> 'Das Bild wurde erfolgreich gemeldet',
	'IMAGES_UPDATED_SUCCESSFULLY'	=> 'Deine Bilderinformationen wurden erfolgreich aktualisiert',
	'INSERT_IMAGE_POST'				=> 'Bild in Beitrag einfügen',
	'INVALID_USERNAME'				=> 'Der Benutzername ist ungültig',
	'INVALID_IMAGE'					=> 'Ungültiges Bild',
	'FILE_DISALLOWED_EXTENSION'		=> 'Datei-Endung ist nicht zulässig.',
	'FILE_WRONG_FILESIZE'			=> 'Falsche Dateigröße',

	'LAST_COMMENT'					=> 'Letzter Kommentar',
	'LAST_IMAGE'					=> 'Letztes Bild',
	'LAST_IMAGE_BY'					=> 'Letztes Bild von',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Du musst registriert und angemeldet sein, um Bilder hochladen zu können.',

	'MARK_ALBUMS_READ'				=> 'Alle Alben als gelesen markieren',
	'MAX_DIMENSIONS'				=> 'Maximale Größe',
	'MAX_FILE_SIZE'					=> 'Maximale Dateigröße',
	'MAX_HEIGHT'					=> 'Maximale Bildhöhe',
	'MAX_WIDTH'						=> 'Maximale Bildbreite',
	'MISSING_COMMENT'				=> 'Keinen Text eingegeben',
	'MISSING_IMAGE_NAME'			=> 'Du musst einen Namen für dein Bild angeben',
	'MISSING_MODE'					=> 'Kein Modus ausgewählt',
	'MISSING_REPORT_REASON'			=> 'Du musst einen Grund angeben um das Bild zu melden.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Es wurde kein Plugin zum Darstellen einer Diashow gefunden. Bitte kontaktiere die Board-Administration.',
	'MISSING_SUBMODE'				=> 'Kein Sub-Modus ausgewählt',
	'MISSING_USERNAME'				=> 'Kein Benutzernamen angegeben',
	'MOVE_TO_ALBUM'					=> 'Ins Album verschieben',
	'MOVE_TO_PERSONAL'				=> 'In persönliches Album verschieben',
	'MOVE_TO_PERSONAL_MOD'			=> 'Wenn diese Option ausgewählt wird, wird das Bild in das Persönliche Album des Benutzers verschoben. Wenn dieser noch keines angelegt hat, wird es automatisch angelegt.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Wenn diese Option ausgewählt wird, wird das Bild in dein Persönliche Album verschoben. Wenn du noch keines angelegt hast, wird es automatisch angelegt.',

	'NEW_COMMENT'					=> 'Neuer Kommentar',
	'NEW_IMAGES'					=> 'Neue Bilder',
	'NEWEST_PGALLERY'				=> 'Unsere neueste persönliche Galerie: %s',
	'NO_ALBUMS'						=> 'In dieser Galerie gibt es keine Alben',
	'NO_COMMENTS'					=> 'Noch keine Kommentare',
	'NO_IMAGES'						=> 'keine Bilder',
	'NO_IMAGES_FOUND'				=> 'Es wurden keine Bilder gefunden.',
	'NO_NEW_IMAGES'					=> 'Keine neue Bilder',
	'NO_IMAGES_LONG'				=> 'In diesem Album gibt es keine Bilder.',
	'NOT_ALLOWED_FILE_TYPE'			=> 'Dieser Datei Typ ist nicht erlaubt',
	'NOT_RATED'						=> 'Nicht bewertet',
	'NO_SEARCH_RESULTS'				=> 'Keine Alben gefunden',

	'NO_WRITE_ACCESS'				=> 'Das Uploadverzeichnis fehlt oder PhpBB verfügt über keinen Schreibzugriff darauf.<br>Bitte kontaktiere den Board-Admin!',

	'ORDER'							=> 'Reihenfolge',
	'ORIG_FILENAME'					=> 'Dateinamen als Bildname verwenden (das Eingabefeld ist ohne Funktion)',
	'OUT_OF_RANGE_VALUE'			=> 'Wert ist ausserhalb des Bereichs',
	'OWN_IMAGES'					=> 'Deine Bilder',

	'PERCENT'						=> '%',
	'PERSONAL_ALBUMS'				=> 'Persönliche Alben',
	'PIXELS'						=> 'Pixel',
	'PLUGIN_CLASS_MISSING'			=> 'Gallery Plugin Fehler: Die Klasse „%s“ konnte nicht gefunden werden!',
	'POST_COMMENT'					=> 'Kommentar schreiben',
	'POST_COMMENT_RATE_IMAGE'		=> 'Kommentar schreiben und Bild bewerten',
	'POSTER'						=> 'Autor',

	'QUOTA_REACHED'					=> 'Die Anzahl der Bilder, die du hochladen kannst, wurde erreicht.',
	'QUOTE_COMMENT'					=> 'Kommentar zitieren',
	'QUICK_MOD'						=> 'Schnellmoderation',

	'RANDOM_IMAGES'					=> 'Zufällige Bilder',
	'RATE_IMAGE'					=> 'Bild bewerten',
	'RATES_COUNT'					=> 'Anzahl der Bewertungen',
	'RATING'						=> 'Bewertung',
	'RATING_STRINGS'				=> array(
		0	=> 'Nicht bewertet',
		1	=> '%2$s (1 Bewertung)',
		2	=> '%2$s (%1$s Bewertungen)',
	),
	'RATING_STRINGS_USER'			=> array(
		1	=> '%2$s (1 Bewertung, deine Bewertung: %3$s)',
		2	=> '%2$s (%1$s Bewertungen, deine Bewertung: %3$s)',
	),
	'RATING_SUCCESSFUL'				=> 'Das Bild wurde erfolgreich bewertet.',
	'READ_REPORT'					=> 'Meldung ansehen',
	'RECENT_COMMENTS'				=> 'Neueste Kommentare',
	'RECENT_IMAGES'					=> 'Neueste Bilder',
	'REPORT_IMAGE'					=> 'Bild melden',
	'RETURN_ALBUM'					=> '%sZurück zum zuletzt besuchten Album%s',
	'ROTATE_IMAGE'					=> 'Bild drehen',
	'ROTATE_LEFT'					=> '90° links',
	'ROTATE_NONE'					=> 'nicht drehen',
	'ROTATE_RIGHT'					=> '90° rechts',
	'ROTATE_UPSIDEDOWN'				=> '180° oben nach unten',
	'RETURN_TO_GALLERY'				=> 'zurück zur Galerie',

	'SEARCH_ALBUM'					=> 'Album durchsuchen…',
	'SEARCH_ALBUMS'					=> 'Zu durchsuchende Alben',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Wähle das Album oder die Alben aus, in denen gesucht werden soll. Subalben werden automatisch mit durchsucht, sofern du die Option „Subalben durchsuchen“ unten nicht deaktivierst.',
	'SEARCH_COMMENTS'				=> 'Nur in den Kommentaren',
	'SEARCH_CONTEST'				=> 'Wettbewerb-Sieger',
	'SEARCH_IMAGE_COMMENTS'			=> 'Bildnamen, Beschreibungen und Kommentare',
	'SEARCH_IMAGE_VALUES'			=> 'Nur Bildnamen und Beschreibungen',
	'SEARCH_IMAGENAME'				=> 'Nur Bildnamen',
	'SEARCH_RANDOM'					=> 'Zufällige Bilder',
	'NO_SEARCH_RESULTS_RANDOM'		=> 'Es gibt keine Bilder oder Du hast nicht die Berechtigung sie zu sehen!',
	'SEARCH_RECENT'					=> 'Neueste Bilder',
	'NO_SEARCH_RESULTS_RECENT'		=> 'Es gibt keine Bilder oder Du hast nicht die Berechtigung sie zu sehen!',
	'SEARCH_RECENT_COMMENTS'		=> 'Neueste Kommentare',
	'NO_SEARCH_RESULTS_RECENT_COMMENTS'	=> 'Es gibt keine aktuellen Kommentare, oder Du hast keinen Zugriff!',
	'SEARCH_SUBALBUMS'				=> 'Subalben durchsuchen',
	'SEARCH_TOPRATED'				=> 'Beste Bewertungen',
	'SEARCH_USER_IMAGES'			=> 'Bilder des Mitglieds anzeigen',
	'SEARCH_USER_IMAGES_OF'			=> 'Bilder von %s',
	'SELECT_ALBUM'					=> 'Wähle ein Album aus',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Persönliches Album von %s anzeigen',
	'SLIDE_SHOW'					=> 'Diashow',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Um die Diashow zu starten, klicke auf einen der Bildnamen und dann auf das „play“-Icon:',
	'SLIDE_SHOW_LYTEBOX'			=> 'Um die Diashow zu starten, klicke auf einen der Bildnamen:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Um die Diashow zu starten, klicke auf einen der Bildnamen:',
	'SORT_ASCENDING'				=> 'Aufsteigend',
	'SORT_DEFAULT'					=> 'Standard',
	'SORT_DESCENDING'				=> 'Absteigend',
	'STATUS'						=> 'Status',
	'SUBALBUMS'						=> 'Subalben',
	'SUBALBUM'						=> 'Subalbum',

	'THUMBNAIL_SIZE'				=> 'Vorschaubildgrösse (Pixel)',
	'TOTAL_COMMENTS_SPRINTF'		=> array(
		0	=> 'Kommentare insgesamt: <strong>0</strong>',
		1	=> 'Kommentare insgesamt: <strong>%d</strong>',
		2	=> 'Kommentare insgesamt: <strong>%d</strong>',
	),
	'TOTAL_IMAGES'					=> 'Bilder insgesamt',
	'TOTAL_IMAGES_SPRINTF'			=> array(
		0	=> 'Keine Bilder',
		1	=> '%d Bild',
		2	=> '%d Bilder',
	),
	'TOTAL_PEGAS_SHORT_SPRINTF'		=> array(
		0	=> '0 persönliche Galerien',
		1	=> '%d persönliche Galerie',
		2	=> '%d persönliche Galerien',
	),
	'TOTAL_PEGAS_SPRINTF'			=> array(
		0	=> 'Persönliche Galerien insgesamt: <strong>0</strong>',
		1	=> 'Persönliche Galerien insgesamt: <strong>%d</strong>',
		2	=> 'Persönliche Galerien insgesamt: <strong>%d</strong>',
	),

	'UNLOCK_IMAGE'					=> 'Bild entsperren',
	'UNWATCH_ALBUM'					=> 'Album nicht mehr beobachten',
	'UNWATCH_IMAGE'					=> 'Bild nicht mehr beobachten',
	'UNWATCH_PEGAS'					=> 'Neue Persönliche Alben nicht mehr automatisch beobachten',
	'UNWATCHED_ALBUM'				=> 'Du wirst nicht mehr über neue Bilder in diesem Album benachrichtigt.',
	'UNWATCHED_ALBUMS'				=> 'Du wirst nicht mehr über neue Bilder in diesen Alben benachrichtigt.',
	'UNWATCHED_IMAGE'				=> 'Du wirst nicht mehr über Kommentare zu diesem Bild benachrichtigt.',
	'UNWATCHED_IMAGES'				=> 'Du wirst nicht mehr über Kommentare zu diesen Bildern benachrichtigt.',
	'UNWATCHED_PEGAS'				=> 'Du beobachtest neue persönliche Alben nicht mehr automatisch.',
	'UPLOAD_ERROR'					=> 'Wärend dem Hochladen von „%1$s“ ist der folgende Fehler aufgetreten:<br />&raquo; %2$s',
	'UPLOAD_IMAGE'					=> 'Bild hochladen',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'		=> 'Die Dimension Deines Bildes ist zu groß',
	'UPLOAD_NO_FILE'				=> 'Du musst deinen Pfad und Dateinamen eingeben',
	'UPLOADED_BY_USER'				=> 'Hochgeladen von',
	'UPLOADED_ON_DATE'				=> 'Hochgeladen',
	'USE_SAME_NAME'					=> 'Den gleichen Namen und die gleiche Beschreibung für alle Bilder verwenden.',
	'USE_NUM'						=> 'Für Ziffern {NUM} einfügen. Starte mit Wert:',
	'USER_REACHED_QUOTA'			=> array(
		0	=> 'Du darfst <strong>keine</strong> Bilder hochladen.<br />Für weitere Information wende dich bitte an einen Administrator.',
		1	=> 'Du darfst nur <strong>1</strong> Bild hochladen.<br />Für weitere Information wende dich bitte an einen Administrator.',
		2	=> 'Du darfst nur <strong>%s</strong> Bilder hochladen.<br />Für weitere Information wende dich bitte an einen Administrator.',
	),
	'USER_REACHED_QUOTA_SHORT'		=> array(
		0	=> 'Du darfst <strong>keine</strong> Bilder hochladen.',
		1	=> 'Du darfst nur <strong>1</strong> Bild hochladen.',
		2	=> 'Du darfst nur <strong>%s</strong> Bilder hochladen.',
	),
	'USERNAME_BEGINS_WITH'			=> 'Benutzername fängt an mit',
	'USERS_PERSONAL_ALBUMS'			=> 'Persönliche Alben der Mitglieder',

	'VIEW_ALBUM'					=> 'Album ansehen',
	'VIEW_ALBUM_IMAGES'				=> array(
		1	=> '1 Bild',
		2	=> '%s Bilder',
	),
	'VIEW_IMAGE'					=> 'Bild ansehen',
	'VIEW_IMAGE_COMMENTS'			=> array(
		1	=> '1 Kommentar',
		2	=> '%s Kommentare',
	),
	'VIEW_LATEST_IMAGE'				=> 'Das neueste Bild ansehen',
	'VIEW_SEARCH_RECENT'			=> 'Neueste Bilder',
	'VIEW_SEARCH_RANDOM'			=> 'Zufällige Bilder',
	'VIEW_SEARCH_COMMENTED'			=> 'Neueste Kommentare',
	'VIEW_SEARCH_CONTESTS'			=> 'Wettbewerb-Sieger',
	'VIEW_SEARCH_TOPRATED'			=> 'Beste Bewertungen',
	'VIEW_SEARCH_SELF'				=> 'Eigene Bilder',
	'VIEWING_ALBUM'					=> 'Betrachtet Album %s',
	'VIEWING_IMAGE'					=> 'Betrachtet ein Bild im Album %s',

	'VISIT_GALLERY'					=> 'Benutzer Galerie besuchen',

	'WATCH_ALBUM'					=> 'Album beobachten',
	'WATCH_IMAGE'					=> 'Bild beobachten',
	'WATCH_PEGAS'					=> 'Neue Alben automatisch beobachten',
	'WATCHING_ALBUM'				=> 'Du wirst über neue Bilder in diesem Album benachrichtigt.',
	'WATCHING_IMAGE'				=> 'Du wirst über Kommentare zu diesem Bild benachrichtigt.',
	'WATCHING_PEGAS'				=> 'Du beobachtest neue persönliche Alben jetzt automatisch.',

	'YOUR_COMMENT'					=> 'Dein Kommentar',
	'YOUR_PERSONAL_ALBUM'			=> 'Dein persönliches Album',
	'YOUR_RATING'					=> 'Deine Bewertung',

	'IMAGES_MOVED'					=> array(
		1	=>	'Bild verschoben',
		2	=> 	'%s Bilder verschoben',
	),
	'WRONG_FILESIZE'	=> 'Das Bild hat die max. eingestellte Größe überschritten!',

	// Versions 1.2.1 addiotions
	'GALLERY_DROP'		=> 'Lege dein Bilder hierher',
));
