<?php

// Load Config
$config = require dirname( __DIR__ ) . '/config/config.php';

// Validate Config
if (empty($config['sitename'])) {
	$config['sitename'] = 'Page Rotator';
}

if (!is_array($config['urls']) || empty($config['urls'])) {
	$config['urls'] = [ "about:blank" ];
}

$config['urlList'] = '"' . implode( '", "', $config['urls'] ) . '"';
