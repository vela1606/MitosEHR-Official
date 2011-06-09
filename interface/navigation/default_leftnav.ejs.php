<?php

session_name ( "MitosEHR" );
session_start();
session_cache_limiter('private');

include_once("../../library/dbHelper/dbHelper.inc.php");
include_once("../../library/I18n/I18n.inc.php");
require_once("../../repository/dataExchange/dataExchange.inc.php");

//******************************************************************************
// Reset session count 10 secs = 1 Flop
//******************************************************************************
$_SESSION['site']['flops'] = 0;

// *************************************************************************************
// Renders the items of the navigation panel
// Default Nav Data
// *************************************************************************************
$buff = "[" . chr(13);

// -------------------------------------
// Dashboard
// -------------------------------------
$buff .= '{ "text":"' . i18n('Dashboard', 'r') . '", "leaf":true, "cls":"file", "id":"dashboard/dashboard.ejs.php"},' . chr(13);
$buff .= '{ "text":"' . i18n('Messages', 'r') . '", "leaf":true, "cls":"file", "id":"messages/messages.ejs.php"},' . chr(13);
// -------------------------------------
// Patient
// -------------------------------------
$buff .= '{"text":"' . i18n('Patient - TODO', 'r') . '", "cls":"folder", "expanded": true,' . chr(13);
	$buff .= '"children": [' . chr(13); // ^ Folder
	$buff .= '{"text":"' . i18n('New Patient - TODO', 'r') . '", "leaf":true, "cls":"file", "id":"patient_file/new/new_patient.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Patient File - TODO', 'r') . '", "leaf":true, "cls":"file", "id":"patient_file/patient_file.ejs.php"},' . chr(13);
	// -------------------------------------
	// Patient
	// -------------------------------------
	$buff .= '{"text":"' . i18n('Visits - TODO', 'r') . '", "cls":"folder", ' . chr(13);
		$buff .= '"children": [' . chr(13); // ^ Folder
		$buff .= '{"text":"' . i18n('Create Visit - TODO', 'r') . '", "leaf":true, "cls":"file", "id":"patient_file/visit/create.ejs.php"},' . chr(13);
		$buff .= '{"text":"' . i18n('Current Visit - TODO', 'r') . '", "leaf":true, "cls":"file", "id":"patient_file/visit/current.ejs.php"},' . chr(13);
		$buff .= '{"text":"' . i18n('Visit History - TODO', 'r') . '", "leaf":true, "cls":"file", "id":"patient_file/visit/history.ejs.php"}' . chr(13);
	$buff .= ']}' . chr(13);
$buff .= ']},' . chr(13);
// -------------------------------------
// Administration
// -------------------------------------
$buff .= '{"text":"' . i18n('Administration', 'r') . '", "cls":"folder", "expanded": true, ' . chr(13);
	$buff .= '"children": [' . chr(13); // ^ Folder
	$buff .= '{"text":"' . i18n('Global Settings', 'r') . '", "leaf":true, "cls":"file", "id":"administration/globals/globals.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Facilities', 'r') . '", "leaf":true, "cls":"file", "id":"administration/facilities/facilities.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Users', 'r') . '", "leaf":true, "cls":"file", "id":"administration/users/users.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Practice', 'r') . '", "leaf":true, "cls":"file", "id":"administration/practice/practice.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Roles', 'r') . '", "leaf":true, "cls":"file", "id":"administration/roles/roles.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Layouts', 'r') . '", "leaf":true, "cls":"file", "id":"administration/layout/layout.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Lists', 'r') . '", "leaf":true, "cls":"file", "id":"administration/lists/lists.ejs.php"}' . chr(13);
$buff .= ']},' . chr(13);
// -------------------------------------
// Administration
// -------------------------------------
$buff .= '{"text":"' . i18n('Miscellaneous', 'r') . '", "cls":"folder", "expanded": true, ' . chr(13);
	$buff .= '"children": [' . chr(13); // ^ Folder
	$buff .= '{"text":"' . i18n('Address Book', 'r') . '", "leaf":true, "cls":"file", "id":"miscellaneous/addressbook/addressbook.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('Office Notes', 'r') . '", "leaf":true, "cls":"file", "id":"miscellaneous/office_notes/office_notes.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('My Settings', 'r') . '", "leaf":true, "cls":"file", "id":"miscellaneous/my_settings/my_settings.ejs.php"},' . chr(13);
	$buff .= '{"text":"' . i18n('My Account', 'r') . '", "leaf":true, "cls":"file", "id":"miscellaneous/my_account/my_account.ejs.php"}' . chr(13);
$buff .= ']},' . chr(13);
// -------------------------------------
// Test Folder
// -------------------------------------
$buff .= '{"text":"' . i18n('Test Area', 'r') . '", "cls":"folder", "expanded": true, ' . chr(13);
	$buff .= '"children": [' . chr(13); // ^ Folder
$buff .= ']}' . chr(13);
// *************************************************************************************
// End Nav Data JSON
// *************************************************************************************
$buff .= "]" . chr(13);

echo $buff;

?>