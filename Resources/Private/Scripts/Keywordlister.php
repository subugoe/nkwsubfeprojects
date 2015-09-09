<?php
require_once(dirname(__FILE__) . './../../../../../localconf.php');

$db = new MySqli($typo_db_host, $typo_db_username, $typo_db_password, $typo_db);

$abfrage = 'SELECT freekeywords FROM t3_w3l.tx_nkwsubfeprojects_domain_model_project WHERE freekeywords != \'\' AND hidden = 0 AND deleted = 0';

$query = $db->query($abfrage);
$keywordList = [];

while ($row = mysqli_fetch_object($query)) {


    if (strpos($row->freekeywords, ',')) {
        $keywords = explode(',', $row->freekeywords);
        foreach ($keywords as $keyword) {
            array_push($keywordList, trim($keyword));
        }

    } else {
        array_push($keywordList, $row->freekeywords);
    }

}


// feste keywords
$abfrage = 'SELECT DISTINCT(title) as keyword FROM t3_w3l.tx_nkwsubfeprojects_domain_model_keywords WHERE title != \'\'';
$query = $db->query($abfrage);

while ($row = mysqli_fetch_object($query)) {

    array_push($keywordList, $row->keyword);

}

$keywordList = array_unique($keywordList);

sort($keywordList);

foreach ($keywordList as $keyword) {
    echo $keyword . "<br />";
}
