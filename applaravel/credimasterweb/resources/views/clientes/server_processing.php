<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'clientes';

// Table's primary key
$primaryKey = 'idCli';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
	array( 'db' => 'idCli', 'dt' => 0 ),
	array( 'db' => 'nombres',  'dt' => 1 ),
	array( 'db' => 'apellidos',   'dt' => 2 ),
	array( 'db' => 'cedula',     'dt' => 3 ),
	array( 'db' => 'sexo',     'dt' => 4 ),
	array( 'db' => 'telefono',     'dt' => 5 ),
	array( 'db' => 'oficio',     'dt' => 6 )

);
/*
$columns = array(
	array( 'db' => 'codCli', 'dt' => 0 ),
	array( 'db' => 'nombres',  'dt' => 1 ),
	array( 'db' => 'apellidos',   'dt' => 2 ),
	array( 'db' => 'cedula',     'dt' => 3 ),
	array( 'db' => 'sexo',     'dt' => 4 ),
	array( 'db' => 'telefono',     'dt' => 3 ),
	array( 'db' => 'oficio',     'dt' => 3 ),
	array(
		'db'        => 'start_date',
		'dt'        => 4,
		'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array(
		'db'        => 'salary',
		'dt'        => 5,
		'formatter' => function( $d, $row ) {
			return '$'.number_format($d);
		}
	)
);
*/


// SQL server connection information
$sql_details = array(
	'user' => 'jdramos_admin',
	'pass' => 'duarte86',
	'db'   => 'jdramos_test',
	'host' => '192.185.78.20'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


