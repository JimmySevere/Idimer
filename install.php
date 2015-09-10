<?php
print_r( idb()->get_results( "SELECT table_name FROM information_schema.tables" ) );
var_dump( ini_get('mysqlnd') );
