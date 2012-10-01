<?php
require_once(dirname(__FILE__) . './../../../../../localconf.php');

$db = new MySqli($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

$abfrage = 'SELECT uid_local, COUNT(uid_foreign) as counter FROM tx_nkwsubfeprojects_person_tt_address_mm GROUP BY uid_local';

$query = $db->query($abfrage);
$personList = array();

while ($row = mysqli_fetch_object($query)) {
	$update = "UPDATE tx_nkwsubfeprojects_domain_model_project set person = " . $row->counter . " WHERE uid = " . $row->uid_local;
	$db->query($update);
}