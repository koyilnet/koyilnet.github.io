<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Koyilnet - Ultimate Web on Indian temples and Gods</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
<?php

      include 'test.php' ;
      include 'result.php' ;
      //echo $plc ;
?>
	<div id="page">
		<div id="header">
			&nbsp;<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
              <tr>
                <td width="50%">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="9%">
                    <img border="0" src="images/kovil.gif" width="40" height="53"></td>
                    <td width="91%">
                    <font color="#FFFFFF" size="7" face="Algerian">
                    <a href="index.html" style="text-decoration: none">
                    <font color="#FFFFFF">Koyilnet</font></a></font></td>
                  </tr>
                  <tr>
                    <td width="100%" colspan="2">
                    <font color="#FFFFFF" face="Brush Script MT" size="4">Ultimate Web on
                    Indian Temples and God</font></td>
                  </tr>
                </table>
                </td>
                <td width="50%">&nbsp;</td>
              </tr>
            </table>
			<ul id="navigation">
				<li>
					<a href="index.html" title="Home"></a>
				</li>
				<li> <?
					$mli='';

				  if ($mc = 1)
				  {				  $mli='<li class="selected">';
				  $mdd='tevaram.html';
				  }
				  echo $mli;
				?>

					<a href="shiva.html"><font color="#FFFFFF">Shiva</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<?
					$mli='';

				  if ($mc = 0)
				  {
				  $mli='<li class="selected">';
				  $mdd='divyadesam.html';
				  }
				  echo $mli;
				?>
				<li>
					<a href="vishnu.html"><font color="#FFFFFF">Vishnu</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<li>
					<a href="sakthi.html"><font color="#FFFFFF">Sakthi</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<li>
					<a href="ganesh.html"><font color="#FFFFFF">Ganesh</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<li>
					<a href="muruga.html"><font color="#FFFFFF">Muruga</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<li>
					<a href="ayappa.html"><font color="#FFFFFF">Ayappa</font></a><font color="#FFFFFF">
                    </font>
				</li>
				<li class="last-child">
					&nbsp;</li>

				<li class="last-child">
					<a href="navagraha.html"><font color="#FFFFFF">Navagraha</font></a><font color="#FFFFFF">
                    </font>
				</li>

			</ul>
		</div>
		<div id="contents">
			<div class="background">

				<p align="center" style="text-align: center">
                <font color="#FFFFFF">
                <font face="Algerian" size="5">Abodes of lord <?php echo $tgod ?></font> </font> </p>
      <p align="justify" style="text-align: center"><font color="#FFFFFF"><b>



      <p align="justify" style="text-align: center"><font color="#FFFFFF"><b><?php echo $tsl . ". "  ?>
      Arulmigu <?php echo $tn . " Temple - " . $plc  ?></b></font><p style="text-align: center">
                <img border="0" src=<?php echo $tim ?> width="640" height="409"></p>
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="6%">&nbsp;</td>
                    <td width="85%">
                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                      <tr>
                        <td width="41%" align="right"><b><i>
                        <font face="Times New Roman" color="#FFFFFF">Moolavar</font></i></b></td>
                        <td width="6%">&nbsp;</td>
                        <td width="53%" align="left">
                        <font color="#FFFFFF" face="Times New Roman"><i><b><?php echo $tm ?></b></i></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><b><i>Utsavar</i></b></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $tu ?></i></b></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><i><b>Thayar</b></i></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><i><b><?php echo $tt ?></b></i></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><i><b>Kshethram</b></i></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $ttk ?></i></b></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><i><b>Theertham</b></i></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><i><b><?php echo $tte ?></b></i></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><b><i>Pose &amp;
        Direction</i></b></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $ttd ?></i></b></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><i><b>Vimanam</b></i></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><i><b><?php echo $tv ?></b></i></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><b><i>Sthala
        Vruksham</i></b></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $ttv ?></i></b></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><i><b>Paadiyavar</b></i></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><i><b><?php echo $ttp ?></b></i></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><b><i>Travel Base</i></b></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $ttb ?></i></b></font></td>
                      </tr>
                      <tr>
        <td width="27%" align="right">
        <font color="#FFFFFF" face="Times New Roman"><b><i>Nearest Railway Station</i></b></font></td>
                        <td width="6%">&nbsp;</td>
        <td width="119%" align="left">
        <font face="Times New Roman" color="#FFFFFF"><b><i><?php echo $trs ?></i></b></font></td>
                      </tr>
                      </table>
                    </td>
                    <td width="9%">&nbsp;</td>
                  </tr>
                </table>
                <p align="justify" style="text-align: center">&nbsp;<p align="justify" style="text-align: center">
                <i><b><font color="#FFFFFF">Location</font></b></i><table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="100%">
                    <font color="#FFFFFF" face="Times New Roman, Times, serif"><i><b><?php echo $tloc ?></b></i></font></td>
                  </tr>
                </table>
                <p align="justify" style="text-align: center">&nbsp;<p align="justify" style="text-align: center">
                <i><b><font color="#FFFFFF">History</font></b></i><table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="100%">
                    <font color="#FFFFFF" face="Times New Roman, Times, serif"><i><b><?php echo $thist ?></b></i></font></td>
                  </tr>
                </table>
                <p align="justify">&nbsp;<p align="justify" style="text-align: center">
                <i><b><font color="#FFFFFF">Architecture</font></b></i><table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="100%">
                    <font color="#FFFFFF" face="Times New Roman, Times, serif"><b><i><?php echo $tarch ?></i></b></font></td>
                  </tr>
                </table>
                <p align="justify">Arulmigu <?php echo $tn . " Temple"?>
                <br><?php echo $tcir . ", " . $tdist . " - " . $tpin ?><br>Phone: <?php echo $tphone ?><br>Temple Timings : <?php echo $ttime ?>

                <p align="justify">&nbsp;<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
                  <tr>
                    <td width="5%"><a href="<? echo $mdd ?>">
                    <img border="0" src="images/left%20arrow.gif" width="40" height="40"></a></td>
                    <td width="89%">&nbsp;</td>
                    <td width="6%">&nbsp;</td>
                  </tr>
                </table>
            </div>

		</div>
		<div id="footer">
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
			</div>
			<p>
				Copyright &copy; 2016. All Rights Reserved.
			</p>
		</div>
	</div>
</body>

</html>