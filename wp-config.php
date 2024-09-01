<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'gwatsin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ijx~FO)e:ywpbV`%zL<!o)WCL jS@;b R`zMyf(-@./4^9T8mO6h8ONXcQ|-*=RN' );
define( 'SECURE_AUTH_KEY',  '(arjCHbk,Q:EhDPx35sAL^rDQJsCv0okp.=,pkdt&WtKJ<;5TAepGP{4(>Nd_4^X' );
define( 'LOGGED_IN_KEY',    'RkGKPwTT_D:(=*$}v<naX7Q{I+6gx*`4NP *~B&{KD^47KUY-;I*.Qx+,nXv#6gw' );
define( 'NONCE_KEY',        'nhC}ik~o(b$XLV69ayk9otARbJmVm#ML`*T0Ww:=hGnLigZl-l:1x!AI}pWio)>I' );
define( 'AUTH_SALT',        '0<OEuh~,dT*}-D 5E?aXC>mHed3Ou|YL=q.2j1QxS~XMH!-/T=^+&7rj ,(NyOtQ' );
define( 'SECURE_AUTH_SALT', '|WkuwVNS]&+K+/K^KyFs9bR^BR*u/:x$zw41#;fbSCwmK=r^l:ue%d(CRmp83<=D' );
define( 'LOGGED_IN_SALT',   'q(ADsq%~K3{=3$s:qgsD~RB^EKA!^n}4qA.(:|W)9vKP`u^6Em.%(bRHanEHD3l<' );
define( 'NONCE_SALT',       'a3P`~J:(IU$_KC}P@VBa/p*ZcV9PE<;R-Fh{xsImO{XX}(GTCHoBS=S@A2:a;X,B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
