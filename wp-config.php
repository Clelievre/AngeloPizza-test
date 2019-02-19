<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\AngeloPizza\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'AngeloPizza');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w&=8Q1c },i/`f:B*OTOZo6N&@a/~*W!(;%Dr_C0z,D)Q|,A+ix^~S~xiQ_E,{x7');
define('SECURE_AUTH_KEY',  '?]~w+zEEJvN_$3wCp~x=kY>zv`U9&n3ho_3GF_#nb 4*,1/avK*QU@mKq3KT!iC`');
define('LOGGED_IN_KEY',    'twi/5Bgkk^fDVhP:^O4YS^+TiEVE@*;90WsEc}4}b`{/JwA:*uX wmi%Yb[|:-0d');
define('NONCE_KEY',        '%:J6zqP89E;s+G<d-sJkrp 6)0hnFiw7_ew[]9]|9JK)|7yHz/%hA;!6Z%2xpM8K');
define('AUTH_SALT',        'sYUcFoYRxU]EgRU9Q*A#pmVEYO{&OR?%8UftM/8E:ApA<J6hbd9g~s&zpKA1!!vO');
define('SECURE_AUTH_SALT', 'bOBxhHt*$LIM;W8l.40tYO)wMHguf%pE20O52{p!R&d]e/1&3d^m@4t8k!jR8c}v');
define('LOGGED_IN_SALT',   'Aq*@fZhzj8a~<IJBl;gX;FHAfd!DwB2R<ws6+ZlB9l*?mdhC!hJ{0~EHB>;TBwVZ');
define('NONCE_SALT',       '^4(?Z/e;4eenNw3o+pku<(Okz60;vin)?4#|v=U,yF:cx+csxB|[Lvrg+$BHDD<D');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');