<?php
# Database Configuration
define( 'DB_NAME', 'wp_umeecs' );
define( 'DB_USER', 'umeecs' );
define( 'DB_PASSWORD', 'rYFS5rtadWHVyEMFl9ey' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'L-%.P0IJ,(HD!jx8}Z3u9Y{ECxym)4tMaGn<K,OPs~hS@kb@qs9k+xaNfE,V#uW.');
define('SECURE_AUTH_KEY',  '>NyY0ErFdI9ussXGn@*ysi,7K-/C2V[pgQ(]/D/t+>-M-cE,PL6f$qo+WUAk3{?+');
define('LOGGED_IN_KEY',    'ZuQ,jZlQQQFi l5!ul~L9Y:(mKpW{Sae[N0NAm=UEK3|m&[u|eKoij h%]G5oK)t');
define('NONCE_KEY',        '3+>|X2]Y<ly-s|z#J!W7-M8P99fn;#yP~G S3S*mGDpX&v?^FeEM>g,@VL|N<.~B');
define('AUTH_SALT',        'u~NgN=3H!AGjtrI8FR<?N-<M7ZT]obp;-2DkYEL$wgS:z_/3TGuBTWqK/P_{WLPc');
define('SECURE_AUTH_SALT', ')@D>9c|W- alK*0LZS k|1] 4?d$9~;.&vBs)buRL!tYE%5_|5@FAJZfbL=Wx_>2');
define('LOGGED_IN_SALT',   'LkYh<)2)qLCpvunD)Nr$B~!A-cn|h0uKqgd&Zd3x4Wh[``]EPV|@zmSPd4O@-drc');
define('NONCE_SALT',       'VBh3m05T;-TfRmG 9c?BH#opsbh|ZPmU_9=ou$<[FU,x;[H.eA0&LfPm^)Nz25}v');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'umeecs' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c576d76caec0f77d3889bce1bed4a9d5276db37d' );

define( 'WPE_CLUSTER_ID', '110009' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'umeecs.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-110009', );

$wpe_special_ips=array ( 0 => '23.251.146.173', );

$wpe_ec_servers=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'umeecs.wpengine.com' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
