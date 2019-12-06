<?php
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
define( 'DB_NAME', 'marsouin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'marsouin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mrsma' );

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
define( 'AUTH_KEY',         'hH,8;KlU1l4nR4>,Jwe%7m]#}mu /+* pQ^r7B>ocy85H5jPj#{pUfuMWKHpopS=' );
define( 'SECURE_AUTH_KEY',  '%Qe]pCFTqR^C:&#%.$@JDs]%rEH8W0(v7kV##Lks:5.vukr/IA7;%![$iJmliP!c' );
define( 'LOGGED_IN_KEY',    ')Pbx0T3cVv52T6RJ7J[9ej69nCbh+@>g7}T~hs}DmQ3}*{L6IK]Jm&JV!|8xzpy9' );
define( 'NONCE_KEY',        'V*Uq<XNb-Ve:YBzJw!x&zC84i<^5~Z#=@S{KZ?b$5gR+=+U!4X#fgV0!Ndmb;bmG' );
define( 'AUTH_SALT',        '_<#1)7W^~ksQ(al`7}=>v1~P@jZgF2(nNfIdb%O/|WJ9aE]<@Ht~90!!6Z/P_&Kf' );
define( 'SECURE_AUTH_SALT', ' 6Is2_}nd^_F}B$0@oCO+VXZleP7YgK>pNVz<(ktd]fhFAi5qM}[Q]?zddT&~)Un' );
define( 'LOGGED_IN_SALT',   'JSi@TO2e~.x%xc|CZz~ps!4*lt3>bt3y5^<]oFs;Zk%@JtjL~043<vMV~(cT47E2' );
define( 'NONCE_SALT',       '+F>yKmwO6cVNe<e Na~,}iKgO$|X3)`Pu;x:%L?(36obo$FnY]Cgh>{jtaiBFL{s' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
