<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-cli25' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[?GbTd/[9g(6o?}nA?T.f(e!1@P~<xg%@55*XpaJ;ikav|kprJ9*%ePg/bd~QA}/' );
define( 'SECURE_AUTH_KEY',   'l5>FSgE`5b$wsL9x0DFsi2O@e0^xCcv2,7_wQMHkYb0>N#|cb6J?a<Tu&1ECs@OJ' );
define( 'LOGGED_IN_KEY',     'j8YKNb(UrUO:0aud_5ZT/oV0oI`_mDek Sc?4Y7UV<%G`5ix?|V:@Ju)# WxZlbI' );
define( 'NONCE_KEY',         'BG]Wgh&mFm/Rn*@9dEdi;A:][< a+!e|A3;|DIjNvZADAu cWtG$-W9{;l$i0^st' );
define( 'AUTH_SALT',         'Uz2iKQM}!bpc4{!3!?*Paw<ti -m>B1#lPPA.<~#`v2H}+,iM# C{HW[8PR39j@Z' );
define( 'SECURE_AUTH_SALT',  '`H9T^qyo(ajGzgsaoaccQcIqCT?0X{jQw2D0gDYr9|7v<e>i4mE6Pz9a<S=/pcXp' );
define( 'LOGGED_IN_SALT',    'Gd]kE+jZI Bh3@+58@y8zkQ-w7*-NlrB9dF@KZzuX^G2[h^R2)QBF*=PT|W%GN5 ' );
define( 'NONCE_SALT',        '^$A.{XU,1ILKxU^LkUz]phgk])p=;foM2WOSD=4beH,<EN&BJq>8~G;Fc*nrmg{?' );
define( 'WP_CACHE_KEY_SALT', '))yTzDdM0v7U%XWn45w[w7xEf/@ G^yDG#B&d^Y&^Z,!:js!8$)ZJ31S1Bha[}~0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
