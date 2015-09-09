<?php
require_once(dirname(__FILE__) . './../../../../../localconf.php');

$db = new MySqli($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

$sql = "SHOW tables";

$query = $db->query($sql);

while ($row = mysqli_fetch_object($query)) {
    $table = $row->Tables_in_t3_w3l;
    $sql = 'ALTER TABLE ' . $table . ' ENGINE=INNODB';
    $db->query($sql);
}
