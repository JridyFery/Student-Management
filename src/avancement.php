<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nouvelle page 1</title>
</head>

<body>
<?
error_reporting(E_ALL^E_NOTICE);
mysql_connect("localhost","root","");
 mysql_select_db("bd111111");
$req="select * from note";
$r= mysql_query($req);
$t=mysql_num_rows($r);
$req="select * from note where (dc !=-1) and (ds != -1)";
$r= mysql_query($req);
$n=mysql_num_rows($r);
$pourcentage = ($n/$t)*100;
echo"<font size='6' color='red'> <center> AVANCEMENT: ".$pourcentage."% </center></font>";
?>
</body>

</html>
