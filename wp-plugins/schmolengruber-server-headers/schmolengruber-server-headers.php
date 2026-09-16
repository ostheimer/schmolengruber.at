<?php
/**
 * Plugin Name:       Schmolengruber Server Headers
 * Description:       Schreibt Security-Header und Browser-Caching-Regeln beim Aktivieren in die .htaccess (Marker-Block) und entfernt sie beim Deaktivieren. Sendet die Security-Header zusätzlich für PHP-Antworten.
 * Version:           1.0.0
 * Author:            Ostheimer OG
 * Author URI:        https://www.ostheimer.at/
 * License:           GPLv2 or later
 */

defined( 'ABSPATH' ) || exit;

const SCHMO_HEADERS_MARKER = 'Schmolengruber Server Headers';

function schmo_headers_rules(): array {
	return array(
		'<IfModule mod_headers.c>',
		'	Header always set Strict-Transport-Security "max-age=31536000"',
		'	Header always set X-Content-Type-Options "nosniff"',
		'	Header always set X-Frame-Options "SAMEORIGIN"',
		'	Header always set Referrer-Policy "strict-origin-when-cross-origin"',
		'	Header always set Permissions-Policy "camera=(), microphone=(), geolocation=(), payment=()"',
		'	<FilesMatch "\.(webp|avif|png|jpe?g|gif|svg|ico|woff2?|ttf|otf|css|js|mjs)$">',
		'		Header set Cache-Control "public, max-age=31536000, immutable"',
		'	</FilesMatch>',
		'</IfModule>',
		'<IfModule mod_expires.c>',
		'	ExpiresActive On',
		'	ExpiresDefault "access plus 1 month"',
		'	ExpiresByType text/html "access plus 0 seconds"',
		'	ExpiresByType application/xml "access plus 0 seconds"',
		'	ExpiresByType text/xml "access plus 0 seconds"',
		'	ExpiresByType image/webp "access plus 1 year"',
		'	ExpiresByType image/avif "access plus 1 year"',
		'	ExpiresByType image/png "access plus 1 year"',
		'	ExpiresByType image/jpeg "access plus 1 year"',
		'	ExpiresByType image/gif "access plus 1 year"',
		'	ExpiresByType image/svg+xml "access plus 1 year"',
		'	ExpiresByType image/x-icon "access plus 1 year"',
		'	ExpiresByType font/woff "access plus 1 year"',
		'	ExpiresByType font/woff2 "access plus 1 year"',
		'	ExpiresByType font/ttf "access plus 1 year"',
		'	ExpiresByType text/css "access plus 1 year"',
		'	ExpiresByType text/javascript "access plus 1 year"',
		'	ExpiresByType application/javascript "access plus 1 year"',
		'</IfModule>',
	);
}

function schmo_headers_htaccess_path(): string {
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/misc.php';
	return get_home_path() . '.htaccess';
}

function schmo_headers_activate(): void {
	$file = schmo_headers_htaccess_path();
	if ( ! is_writable( $file ) && ! ( ! file_exists( $file ) && is_writable( dirname( $file ) ) ) ) {
		update_option( 'schmo_headers_status', 'htaccess-not-writable' );
		return;
	}
	$ok = insert_with_markers( $file, SCHMO_HEADERS_MARKER, schmo_headers_rules() );
	update_option( 'schmo_headers_status', $ok ? 'written' : 'write-failed' );
}

function schmo_headers_deactivate(): void {
	$file = schmo_headers_htaccess_path();
	if ( file_exists( $file ) && is_writable( $file ) ) {
		insert_with_markers( $file, SCHMO_HEADERS_MARKER, array() );
	}
	delete_option( 'schmo_headers_status' );
}

register_activation_hook( __FILE__, 'schmo_headers_activate' );
register_deactivation_hook( __FILE__, 'schmo_headers_deactivate' );

add_action(
	'send_headers',
	static function (): void {
		if ( headers_sent() ) {
			return;
		}
		header( 'X-Content-Type-Options: nosniff' );
		header( 'X-Frame-Options: SAMEORIGIN' );
		header( 'Referrer-Policy: strict-origin-when-cross-origin' );
		header( 'Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=()' );
		if ( is_ssl() ) {
			header( 'Strict-Transport-Security: max-age=31536000' );
		}
	}
);
