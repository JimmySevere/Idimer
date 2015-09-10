<?php 

class IDB{
	
	protected static $db;
	
	public static function db(){
		
		if( isset( self::$db ) )
			return self::$db;
		
		$ezSQLDir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'ezSQL-master';
		
		require_once( $ezSQLDir . DIRECTORY_SEPARATOR . 'shared' . DIRECTORY_SEPARATOR . 'ez_sql_core.php' );
		
		switch( IDIMER_DB_TYPE ){
			
			case 'mysql':
				require_once( $ezSQLDir . DIRECTORY_SEPARATOR . 'mysqli' . DIRECTORY_SEPARATOR . 'ez_sql_mysqli.php' );
				return new ezSQL_mysqli( IDIMER_DB_USER, IDIMER_DB_PW, IDIMER_DB_NAME, IDIMER_DB_HOST );
			
			case 'postgresql':
				require_once( $ezSQLDir . DIRECTORY_SEPARATOR . 'postgresql' . DIRECTORY_SEPARATOR . 'ez_sql_postgresql.php' );
				return new ezSQL_postgresql( IDIMER_DB_USER, IDIMER_DB_PW, IDIMER_DB_NAME, IDIMER_DB_HOST );
			
			//case 'sqlite':
			//	require_once( $ezSQLDir . DIRECTORY_SEPARATOR . 'sqlite' . DIRECTORY_SEPARATOR . 'ez_sql_sqlite.php' );
			//	return  new ezSQL_sqlite( IDIMER_DB_USER, IDIMER_DB_PW, IDIMER_DB_NAME, IDIMER_DB_HOST );
			
			default:
				return false;
			
		}
	}
	
	/**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}

function idb(){
	return IDB::db();
}
