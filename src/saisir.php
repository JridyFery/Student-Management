<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nouvelle page 1</title>
</head>

<body>
<?
 mysql_connect("localhost","root","");
 mysql_select_db("bd111111");
 $a=$_POST['T1'];
 $b=$_POST['T2'];
 $c=$_POST['T3'];
 $d=$_POST['D1'];
 $req = "select * from eleve where numero='$a'";
 $r= mysql_query($req);
 if(mysql_num_rows($r)==0)
    echo " <font size=6 color='red'><center>Eleve non Inscrit </center></font>";
   else
   {$req="select * from note where (numeleve='$a') and (codematiere='$d') and (dc != -1) and (ds !=-1)";
     $r= mysql_query($req);
 if(mysql_num_rows($r)!=0)
    echo " <font size=6 color='red'><center> Notes déjà saisies </center></font>";
 else {
 $req="insert into note values('$a','$d','$b','$c')";
     $r= mysql_query($req);
      if ($r==NULL)
          echo " <font size=6 color='red'><center>La requête à echouée </center></font>";  
        else
          echo " <font size=6 color='red'><center>Reussite de l'opération </center></font>";
          }
       }
    ?>
</body>

</html>
