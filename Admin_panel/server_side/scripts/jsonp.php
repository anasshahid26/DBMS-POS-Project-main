<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
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
$table = 'items_type';

// Table's primary key
$primaryKey = 'item_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
		array( 'db' => 'item_tp_desc', 'dt' => Type ),
	array( 'db' => 'item_id',  'dt' => ID ),
	array( 'db' => 'company_name',   'dt' => Company ),
	array( 'db' => 'name',     'dt' => Item Name ),
	array( 'db' => 'batch_no',     'dt' => Batch No. ),
	array( 'db' => 'manufacturer_date',     'dt' => ManufacturerDate ),
	array( 'db' => 'expiry_date',     'dt' => ExpiryDate ),
	array( 'db' => 'formula',     'dt' => Formula ),
	array( 'db' => 'power',     'dt' => Power ),
	array( 'db' => 'quantity',     'dt' => Quantity ),
	array( 'db' => 'unit_price',     'dt' => Unit Price ),
	
);

$sql_details = array(
	'user' => 'seven86c_HASSAN',
	'pass' => 'developer',
	'db'   => 'dbms',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
require( 'ssp.class.php' );

echo $_GET['callback'].'('.json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
).');';

