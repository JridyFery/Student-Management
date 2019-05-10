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
 $req = "select * from eleve where numero='$a'";
 $r= mysql_query($req);
 if(mysql_num_rows($r)==0)
   echo " <font size=6 color='red'><center>Eleve non Inscrit </center></font>";
else
    {
       $req="select * from note where (numeleve='$a') and (codematiere in ('algo','bd','tic'))and (dc!=-1) and (ds !=-1)";
       $r= mysql_query($req);
       if(mysql_num_rows($r)==0)
   				echo " <font size=6 color='red'><center> Saisie incomplète des notes </center></font>";
        else
        { 
            
       $req="select * from note where (numeleve='$a') and (codematiere= 'algo')and (dc !=-1) and (ds !=-1)";
        $r= mysql_query($req);
        while ($tab =mysql_fetch_array($r))
               {   echo "<font size=4> Bulletin de note de l'élève                    ".$tab[0]."</font>";
                   echo "<br> <br>";
        $moy1=($tab[2]+($tab[3]*2))/3;
         $p1=$moy1*3;
        echo "<font size=4> Algorithmique et programmation                  |3|".$tab[2]."|".$tab[3]."|".$moy1."|".$p1."|</font>";
                   echo "<br> <br>";
                   }
        
        $req="select * from note where (numeleve='$a') and (codematiere= 'bd')and (dc !=-1) and (ds !=-1)";
        $r= mysql_query($req);
        while ($tab =mysql_fetch_array($r))
               {   echo "<font size=4> Bulletin de note de l'élève                    ".$tab[0]."</font";
                   echo "<br> <br>";
        $moy2=($tab[2]+($tab[3]*2))/3;
         $p2=$moy2*1.5;
        echo "<font size=4> base de données                  |3|".$tab[2]."|".$tab[3]."|".$moy2."|".$p2."|</font>";
                   echo "<br> <br>";
                   }
                   
           $req="select * from note where (numeleve='$a') and (codematiere= 'tic')and (dc !=-1) and (ds !=-1)";
        $r= mysql_query($req);
        while ($tab =mysql_fetch_array($r))
               {   echo "<font size=4> Bulletin de note de l'élève                    ".$tab[0]."</font";
                   echo "<br> <br>";
        $moy3=($tab[2]+($tab[3]*2))/3;
           $p3=$moy3*1.5;
        echo "<font size=4> base de données                  |3|".$tab[2]."|".$tab[3]."|".$moy3."|".$p3."|</font>";
                   echo "<br> <br>";
                   }
       $mg=($p1 + $p2+ $p3)/6;
            echo "<font size=5 color='red'><center> Moyenne générale".$mg."</center></font>";
         }
                }   

   ?>      
        
</body>

</html>
