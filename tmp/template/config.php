<?php
// connect to db
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('1') ) {
    die ('Can\'t use 1 : ' . mysql_error());
}


?>