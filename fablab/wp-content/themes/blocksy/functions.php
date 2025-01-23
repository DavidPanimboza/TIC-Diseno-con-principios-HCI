<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

function set_secure_cookies($cookie, $name, $value, $expire, $path, $domain, $secure, $httponly) {
    $samesite = 'Lax'; // Cambia a 'Strict' o 'None' según tus necesidades
    return $cookie . '; Secure; HttpOnly; SameSite=' . $samesite;
}
add_filter('setcookie', 'set_secure_cookies', 10, 8);