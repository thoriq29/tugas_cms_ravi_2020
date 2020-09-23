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
define( 'DB_NAME', 'cms_eventx_jerbee' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'id*;cXZP03m1:UsKP,#G}qLjf ^]KwcB7]TlG]-;)YHE(dx{DsK3ec;{7JHS(2}m' );
define( 'SECURE_AUTH_KEY',  't*`e@khi5|NcnQBs,G{oNUfs>bnb5iOun;!<)fZ!g{x?1|/KZP}XqM!s2ZJ>oh68' );
define( 'LOGGED_IN_KEY',    '|gez5$t9.E#j:9pu$8xe|0.1V<XI9U)+}y:AFd_Xq5dH<&u3`}0<j!6G9hQpkQ::' );
define( 'NONCE_KEY',        '%x2*?AMRB>&JYa|NMl-k:3zAU?Al;jnk/!H@%nl97T}QzWvb[Yu:;Q6!l^$%}.dZ' );
define( 'AUTH_SALT',        'PcI2?9I>M|V~2Wg,#8lP`S1Nw:Ira<V<wxqL%}^~xgi1=OS=Kr}swPuiYtiF+=4f' );
define( 'SECURE_AUTH_SALT', 'wEw5|$gNgwt6I&5]iWQ_y!_AXdS5~>:@HNL>b%c NU=uuQM{%R}83F-U3w/g7Z ?' );
define( 'LOGGED_IN_SALT',   '9Mt( Yvt?5+I#!!><>YF<9W|YaGHP!k:FgkSk$N;4krG$jo0^|HB!}Q{?rg&iNRk' );
define( 'NONCE_SALT',       'fP[`z.N3gzO>A^|moDD]HSNVItFr5SLmjZAuVEeXcDVuCaMb-us)$K61j$R{js!F' );

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
