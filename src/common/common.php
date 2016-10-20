<?php

// Load Config
$config = require dirname( __DIR__ ) . '/config/config.php';

// Validate Config
if (empty($config['sitename'])) {
	$config['sitename'] = 'Page Rotator';
}

if (empty($config['delay'])) {
	$config['delay'] = 10000;
} else {
	$config['delay'] = ( (int) $config['delay'] ) * 1000;
}

if (!is_array($config['urls']) || empty($config['urls'])) {
	$config['urls'] = [ "about:blank" ];
}

$config['urlList'] = '"' . implode( '", "', $config['urls'] ) . '"';
