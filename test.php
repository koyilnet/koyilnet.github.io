<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'temples';
$tid = $_GET['tid'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect");
$dbconn= mysql_select_db($dbname,$conn) or die("Unable to select");
$sql = "SELECT * FROM temple WHERE templeid='{$tid}'" ;
$result = mysql_query($sql) or die("Unable to query");
//echo "Great Work";
?>