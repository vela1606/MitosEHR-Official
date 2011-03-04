<?php
//--------------------------------------------------------------------------------------------------------------------------
// data_create.ejs.php / List Options
// v0.0.2
// Under GPLv3 License
//
// Integrated by: Ernesto Rodriguez ~ MitosEHR
//
// Remember, this file is called via the Framework Store, this is the AJAX thing.
//--------------------------------------------------------------------------------------------------------------------------

session_name ( "MitosEHR" );
session_start();

include_once("library/dbHelper/dbHelper.inc.php");
include_once("library/I18n/I18n.inc.php");
require_once("repository/dataExchange/dataExchange.inc.php");

// *************************************************************************************
// Parce the data generated by EXTJS witch is JSON
// *************************************************************************************
$data = json_decode ( $_POST['row'] );
switch ($_GET['task']) {
	// *************************************************************************************
	// Create code used to create role
	// *************************************************************************************
	case "create_role":
	// *************************************************************************************
	// Validate and pass the POST variables to an array
	// This is the moment to validate the entered values from the user
	// although Sencha EXTJS make good validation, we could check again 
	// just in case 
	// *************************************************************************************
	$row['role_name'] = dataEncode($data[0]->role_name);
	// *************************************************************************************
	// Finally that validated POST variables is inserted to the database
	// This one make the JOB of two, if it has an ID key run the UPDATE statement
	// if not run the INSERT stament
	// *************************************************************************************
	sqlStatement("INSERT INTO 
					acl_roles 
				SET
					role_name = '" . $row['role_name'] . "', " . "
					option_id = '" . $row['option_id'] . "', " . "
					title = '" . $row['title'] . "', " . "
					is_default = '" . $row['is_default'] . "', " . "
					option_value = '" . $row['option_value'] . "', " . "
					mapping = '" . $row['mapping'] . "', " . "
					notes = '" . $row['notes'] . "'");
	break;
	
	
	// *************************************************************************************
	// Create code used to create permisions
	// *************************************************************************************
	case "create_perm":
	// *************************************************************************************
	// Validate and pass the POST variables to an array
	// This is the moment to validate the entered values from the user
	// although Sencha EXTJS make good validation, we could check again 
	// just in case 
	// *************************************************************************************
	$row['placeholder'] = dataEncode($data[0]->placeholder);
	// *************************************************************************************
	// Finally that validated POST variables is inserted to the database
	// This one make the JOB of two, if it has an ID key run the UPDATE statement
	// if not run the INSERT stament
	// *************************************************************************************
	sqlStatement();
	
	break;

}
?>