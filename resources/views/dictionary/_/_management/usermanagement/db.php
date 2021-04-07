<?php // db.php

$dbhost = 'jarrettekallen.com';
$dbuser = 'jarrett1_admin';
$dbpass = 'Tiger1976';

function dbConnect($db='') {
    global $dbhost, $dbuser, $dbpass;
    
    $dbcnx = @mysql_connect($dbhost, $dbuser, $dbpass)
        or die('The site database appears to be down.');

    if ($db!='' and !@mysql_select_db($db))
        die('The site database is unavailable.');
    
    mysql_set_charset("utf8", $dbcnx);
    
    return $dbcnx;
}
?>
