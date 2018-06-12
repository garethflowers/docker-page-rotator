<?php

$request = dirname( __DIR__ ) . '/public/' . $_SERVER['REQUEST_URI'];

if ( file_exists( $request ) ) {
	return false;
}

header( 'Location: /' );
return true;
