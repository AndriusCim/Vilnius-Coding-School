<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
define( 'WP_MEMORY_LIMIT', '256M' );
/** MySQL database username */
define( 'DB_USER', 'root' );



/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xuWwp>k.Ow*hK7L(b4+Vcg2qHd_CI%G)4-Kr5{sv CO <pz7/3E!j+46y>#U^|e{' );
define( 'SECURE_AUTH_KEY',  'a?Va++=aSfPeqE.C?r_T0TM{#&EV2Ss[I9odf;LqBM!4%RZXee$a%O46ojba|3cJ' );
define( 'LOGGED_IN_KEY',    'uF71Sb[k/e(0/,X+]{+ipHaQJ5aD]YB;|}X88*1*N,|{D85mSuh@!q[5m;b:1)ex' );
define( 'NONCE_KEY',        ']2YfD(?{puh)0jfy!70[.jgH]%6>]H[;1BR_nfAgdm.NvtRC)@mK&sIQ`uD RzN~' );
define( 'AUTH_SALT',        'L$Hf=W=d`d TYb;n;I{MSXb_HX3H1FL]$?cv]1)R,}1I<OMSl5O~*&d--vqH2O:3' );
define( 'SECURE_AUTH_SALT', 'N*N.^7Y}osFrFFB9rtUJI7q8Worvl*QeE3#Ch^O&2U>I,*/`K2#ITY4)7RtJ{0xt' );
define( 'LOGGED_IN_SALT',   '~</=o0Md+r]ofV]n8+t8J$)W1X[-2sh6zMNiBNK(bg]D:.=v3uSla_$@_)ie-6+-' );
define( 'NONCE_SALT',       '{+xdw/geaiUys[UjG^UlufU3+- R_Gqq24H5Ajd4#L&Pozi<>TsRiZo|$ 6PUy-o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

