<?php 

$dbcnx = @mysql_connect('jarrettekallen.com','jarrett1_admin','Tiger1976');

if (!$dbcnx) {exit('<p>Unable to connect to the ' . 'database server at this time.</p>');}

if (!@mysql_select_db('jarrett1_bantayanon.ph')) {exit('<p>Unable to locate the necessary ' . 'database at this time.</p>');}

mysql_set_charset("utf8", $dbcnx);

?>