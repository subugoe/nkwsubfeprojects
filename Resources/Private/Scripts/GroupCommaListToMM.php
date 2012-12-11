<?php
require_once(dirname(__FILE__) . './../../../../../localconf.php');

$db = new MySqli($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

$abfrage = 'SELECT uid, department FROM tx_nkwsubfeprojects_domain_model_project';

$query = $db->query($abfrage);
$groupList = array();

while ($row = mysqli_fetch_object($query)) {
	if (!empty($row->department)) {
		$groupList[$row->uid] = array();

		if (strpos($row->department, ',')) {
			$persons = explode(',', $row->department);
			foreach ($persons as $person) {
				array_push($groupList[$row->uid], trim($person));
			}
		} else {
			array_push($groupList[$row->uid], $row->department);
		}
	}
}

$truncateQuery = "TRUNCATE tx_nkwsubfeprojects_group_tt_address_mm;";
$db->query($truncateQuery);

foreach ($groupList as $key => $val) {

	$werte = '';

	$i = 0;

	foreach ($val as $value) {
		$insert = "INSERT INTO tx_nkwsubfeprojects_group_tt_address_mm (uid_local, uid_foreign) VALUES (" . $key . ", " . $value .")";
		echo $insert . "\n";
		$query = $db->query($insert);
	}

}