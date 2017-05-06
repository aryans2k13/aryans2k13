<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_connect('mysql.hostinger.co.uk', 'u470878004_admin', '9007466531@Shreyan');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('u470878004_tas');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>