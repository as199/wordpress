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

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '<G8vw&PtAYQSQGt48)|?Q3e9@/d1}>eSH6zKUN607PhAob-2vkEYiq%1y?bNs;*Y' );
define( 'SECURE_AUTH_KEY',   'iA-BA%;7<IKqH9]}uGg({*aK!Z-rvAOsh0G3 =bTXkmw:=Wrc8SXMtpiXCLq#(7q' );
define( 'LOGGED_IN_KEY',     '*Otz)NVf1zd6Yt(otQ&0-eCxTJ=?yL/r?u6p5T1=<}{5M49`IKX{dOF;Ltm7Fb`F' );
define( 'NONCE_KEY',         'wlt@!B$E|%)|qsuI04Yw:K]C}}ILk!-uPXYO:l=ofwc#p0}ZKLuM1wFy$29@xA^2' );
define( 'AUTH_SALT',         'g/J*zaeOg=]WzYIc8r)tq57^mFrRWdZf,Qj06KU[?.DYASI.^J4tMQA@k74d:mRL' );
define( 'SECURE_AUTH_SALT',  '(c~-?k5{e.eW@zU>H64BWeN3KJ?FaV;Nqo|uG|&pBO{+^upR%VlldKp*%itoOflY' );
define( 'LOGGED_IN_SALT',    'h@OF4ti{RD^z9*z^L>r`+TAa.*tu2<TM4vxa5-&EujZh+!zgi?dYnp9LeoQRUD{c' );
define( 'NONCE_SALT',        'cYR$*H<x:/niTV3esi7]]qyVX=Ln$VS9d5d*BRM{#|mDL{t}JFeKgzhXt% _TG*O' );
define( 'WP_CACHE_KEY_SALT', 'ks:6]T<E=jnMt5(%lDBmy,qQ2w,%%sx7|?[,[?{{He1m}EkYP:IQ/*usdnw6A::W' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
