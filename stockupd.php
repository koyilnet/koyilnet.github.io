<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'temples';
$tid = $_GET['tid'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect open");
$dbconn= mysql_select_db($dbname,$conn) or die("Unable to select");
$sql = "SELECT * FROM issue where IssueYr = '1718'" ;


$result = mysql_query($sql) or die("Unable to query");
while($row = mysql_fetch_array($result))
{	$pl= $row["PL_No"];
	$un= $row["Unit"];
	$ca= $row["Category"];
	$wd= $row["Ward"];
	$qty= $row["TotalIss"];
	$yr= $row["IssueYr"];
	$sql1 = "SELECT * FROM MMM_STOCK where PL_NO = '{$pl}' AND nlu = '{$un}'
	AND wd = '{$wd}' AND CAT = '{$ca}'" ;
	$result1 = mysql_query($sql1) or die("Unable to query update");

	$sql2 = "UPDATE MMM_STOCK SET  ISSUE_YR3 =  $qty ";
    $retval = mysql_query($sql2);

   	if(! $retval ) {
    	die('Could not update data: ' . mysql_error());
   		}
   	echo "Updated data successfully" + $qty +"\n";    ;
    $pl = '';
  	$un= '';
	$ca= '';
	$wd= '';
	$qty= 0;
	$yr= '';

}
//echo "Great Work";
?>