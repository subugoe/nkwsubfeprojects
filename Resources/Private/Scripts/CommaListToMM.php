<?php

require_once(dirname(__FILE__) . './../../../../../localconf.php');

$db = new MySqli($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

$abfrage = 'SELECT uid,leadperson FROM tx_nkwsubfeprojects_domain_model_project';

$query = $db->query($abfrage);
$personList = [];

while ($row = mysqli_fetch_object($query)) {
    if (!empty($row->leadperson)) {
        $personList[$row->uid] = [];

        if (strpos($row->leadperson, ',')) {
            $persons = explode(',', $row->leadperson);
            foreach ($persons as $person) {
                array_push($personList[$row->uid], trim($person));
            }
        } else {
            array_push($personList[$row->uid], $row->leadperson);
        }
    }
}

foreach ($personList as $key => $val) {

    $werte = '';

    $i = 0;

    foreach ($val as $value) {
        $insert = "INSERT INTO tx_nkwsubfeprojects_leadperson_tt_address_mm (uid_local, uid_foreign) VALUES (" . $key . ", " . $value . ")";
        $query = $db->query($insert);
    }

}
