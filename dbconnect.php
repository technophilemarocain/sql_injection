<?php
ini_set('error_reporting', 0);

GLOBAL $db;
mysql_connect('localhost','root', '');
$db = mysql_select_db('mysite');

function executeQuery($query) {
    $results = array();
$res = mysql_db_query('mysite',$query);

while($result = mysql_fetch_array($res)) {
    $results[] = $result;
}

return $results;
}



