<?php 
/**
 * Idimer
 * Author - The Bop
 * Licence - GPLv2
 */

if( ! version_compare( phpversion(), '7.0.0' ) )
	die( 'PHP version too low.' );

define( 'ROOTDIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );

if( file_exists( ROOTDIR . 'global-config.php' ) ){

	require_once( ROOTDIR . 'global-config.php' );

}else{
	//config file does not exist - create one
	
	die();
}

/**
 * Setup DB Connection and Library
 */
require_once( ROOTDIR . 'core' . DIRECTORY_SEPARATOR . 'db' . DIRECTORY_SEPARATOR . 'idb.php' );

/**
 * Get the current state of the site;
 */
if( ! file_exists( ROOTDIR . 'status.json' ) ){
	file_put_contents( ROOTDIR . 'status.json', json_encode( (object)['installed' => false] ) );
}

$state = json_decode( file_get_contents( ROOTDIR . 'status.json' ) );


if( ! $state->installed ){
	require_once( ROOTDIR . 'install.php' );
}

require_once( ROOTDIR . 'autoload.php' );

require_once( ROOTDIR . 'core' . DIRECTORY_SEPARATOR . 'idimer.php' );
