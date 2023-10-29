<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'SimplVintage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'y]y`;ScPSiORqBVY6_4nb]OzqpO~$0i-N`qG_qvFtRE3#R#eb!em5b0PhSG6VoPI' );
define( 'SECURE_AUTH_KEY',  'c]4,+7~guyLobx8}7W?);($eYC&7csf7E@^]5e]zivh{)P`Xqz!/:0xkw*hkYE4`' );
define( 'LOGGED_IN_KEY',    '3|&m;O%l+cK6xEm>=AE.v[r?&B]>+E:U0H,JZTWj%0{uiat :mP0;>2`dA<d,jBd' );
define( 'NONCE_KEY',        'M2W}D/=G/B*r-TI_pc0Mjx;-r~M)DK|`tURyk<[:Xdx;uRM;09-FK@MM;fokt?uC' );
define( 'AUTH_SALT',        'F]*:DI*=#1&8L]<&Jy=KH7_MSdZBkMR&dVox6JG)+b[3eixgwL!-I]f^cd#vpSB.' );
define( 'SECURE_AUTH_SALT', 'St!J@wx*.-X?$.-~`zjyY1bn$;)[4,A&}Bm#(c$Jm=f7t9`NSJ`mk9ri/i^[}Am.' );
define( 'LOGGED_IN_SALT',   'Qz%DL?.`W+m8@LgruPtEVAbn!<UP*MKdmEhkv%}pL?=63!9F/(g{)^)BdNhZ-U<e' );
define( 'NONCE_SALT',       '4p?w/xDu>eOO0&MJpTfch9/Bh~)tnQ*EBuGc1&mOwIFvG47xbX7I9xxaO,|d5bny' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
