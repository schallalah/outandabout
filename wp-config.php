<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'WPCACHEHOME', '/var/www/sk08397/html/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'usr_sk08397_1');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'sk08397');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'chps2d1g');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'k>xx/[[},Pf7|=YgQljcsi5(Xn9N6heTj{|)=S)IB J^Y@s[V(KVPnlEksqeG<Ex');
define('SECURE_AUTH_KEY',  '4tG2e#R|0uKl=R[sV. d12z^a/ <r.JA191aKIo>,K-HEG%Pb|IZZ)-L@sHPC_o.');
define('LOGGED_IN_KEY',    '*J*)WbA/Hsll0+%,Lw%GAe{(Y6R%[zNhV>CeL$T|+0?Emo8xQ2wwgZ+B/.XNblmm');
define('NONCE_KEY',        '__YC?{D$k?~Zk27:)v+WgTh.|>#A5,LQ+?|i)%1;|]L]2i0QNY.7E$5+>~gw-v3W');
define('AUTH_SALT',        'CMifp co*PIOYxp}/Z*v@?hEvka3o|cqlkB4;=(wz~[ny[X{hW6|+(of%y0?U`<k');
define('SECURE_AUTH_SALT', 'v=Sw%cr;[B&|_)~rRwF0!-L $_rzQd;;v@IYZRCHdM?(+o&!)$Wvd5#r+f+qXY!,');
define('LOGGED_IN_SALT',   'L]:iGEo<|ThMm_~EZGT>mpeme)=nv(szmS#RqBN#xW?L@FMc+Gi`=Ka%3I])g8s{');
define('NONCE_SALT',       'X!6)3S#-Ra27_D.]I?elbOHuLo)-v U]/m87^GNAX HO|sJ++)B,={?G:]7wK+|2');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_DEBUG', true); // false
if (WP_DEBUG) {
  define('WP_DEBUG_LOG', true);
  define('WP_DEBUG_DISPLAY', false);
  @ini_set('display_errors',0);
}

/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');