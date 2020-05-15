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
define('DB_NAME', 'cybozco_wp533');

/** MySQL database username */
define('DB_USER', 'cybozco_wp533');

/** MySQL database password */
define('DB_PASSWORD', '-736S!3Spf');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5bqhnbchkqi4yedwrc0ezbnfknktqpach1dcevppclm9vsvbkaq8odmylk1af67o');
define('SECURE_AUTH_KEY',  'fexoznvcw7asyujap0ngpeqc8pldrjqaxi41ugyvyv14ox5omstfagu8jdy5quh1');
define('LOGGED_IN_KEY',    'tleyjzygortfb1xnbe1ul527abr5bbjmb4lhjmzvptctaucarquvcmue5vrvq5l6');
define('NONCE_KEY',        'z4jd16evqqh2jj2c8wo7ijbwzj0qn1z7nydidipo7npmw69uvtfziysyfqfupc9z');
define('AUTH_SALT',        'xaj7tcvrntqgtxofvgrrnqvwlgr9myqip36vwglktfjbojluumxubtxexg0zk32s');
define('SECURE_AUTH_SALT', 'cyvzzgftuuipm9xdc7kumztgarclbodjygwynobgwuvu9oo09935fbd6nmut8dt0');
define('LOGGED_IN_SALT',   'dvlhm0m5jmu0o6skv4lbjccpqjloycmqc9p2wnwd56b5gkxvwcdreljrfhsrczdd');
define('NONCE_SALT',       'mofejktrv160ax5q6cfj2yweya7mwhnsm50fswyzuyfkkornfzy4odc3gzk7oajk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphe_';

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
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'meaieeesb.org');
define('PATH_CURRENT_SITE', '/xtrinia/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
