<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
$plc= $row["tplace"];
$tn = $row["thead"];
$tm = $row["tmoolavar"];
$tt = $row["tthayar"];
$tu = $row["tutsavar"];
$tv = $row["tvimanam"];
$tim = $row["timage"];
$tte = $row["ttheertham"];
$ttk = $row["tkshethram"];
$ttd = $row["tdirection"];
$ttv = $row["tvruksham"];
$ttp = $row["tpadiyavar"];
$trs = $row["trs"];
$ttb = $row["ttravelbase"];
$tloc = $row["tlocation"];
$thist = $row["thist"];
$tarch = $row["tarch"];
$tcir = $row["tcircle"];
$tdist = $row["tdistrict"];
$tstate = $row["tstate"];
$tpin = $row["tpin"];
$tphone = $row["tphone"];
$ttime = $row["ttimings"];
$tsl = $row["tslno"];
$tgod = $row["tgod"];
$mc=0;
if ($tgod == 'Shiva')
{
$mc= 1;	}
}
?>