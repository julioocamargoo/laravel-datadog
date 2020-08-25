<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/** $curl = curl_init();

* curl_setopt_array($curl, array(
*  CURLOPT_URL => "http://169.254.169.254/latest/meta-data/local-ipv4",
*  CURLOPT_RETURNTRANSFER => true,
*  CURLOPT_ENCODING => "",
*  CURLOPT_MAXREDIRS => 10,
*  CURLOPT_TIMEOUT => 0,
*  CURLOPT_FOLLOWLOCATION => true,
*  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
*  CURLOPT_CUSTOMREQUEST => "GET"
* ));

* $ip = curl_exec($curl);

* curl_close($curl);

* putenv("DD_AGENT_HOST=$ip"); */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
