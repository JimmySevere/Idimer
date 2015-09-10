<?php

define( 'IDIMER_DEV', true );

//Define dev 
if( IDIMER_DEV ){
	
	define( 'IDIMER_DB_TYPE', 'mysql' );
	
	define( 'IDIMER_DB_HOST', '127.0.0.1' );
	
	define( 'IDIMER_DB_NAME', 'idimerdev' );
	
	define( 'IDIMER_DB_USER', 'idimerdev' );
	
	define( 'IDIMER_DB_PW', 'xl"[#PS"' );
	
	define( 'IDIMER_DB_CHARSET', 'utf8' );
	
	
	define( 'IDIMER_DEBUG', true );

}else{
	
	define( 'IDIMER_DB_TYPE', 'postgresql' );
	
	define( 'IDIMER_DB_HOST', '127.0.0.1' );
	
	define( 'IDIMER_DB_NAME', 'idimer' );
	
	define( 'IDIMER_DB_USER', 'idimer' );
	
	define( 'IDIMER_DB_PW', '' );
	
	define( 'IDIMER_DB_CHARSET', 'utf8' );
	
	
	define( 'IDIMER_DEBUG', false );
	
}
