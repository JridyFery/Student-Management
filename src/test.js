

function verif(f1){
ch= f1.T1.value;
ch1= ch.charAt(0)+ch.charAt(1)+ch.charAt(2);
ch2=ch.charAt(3)+ch.charAt(4);

if((ch.length!=5))
{alert ('chaine de longueur 5');
   return false;
   }

if((ch1!='4si'))
{
   alert ('chaine doit commencer par 4si et suivi par deux chiffres');
   return false;
   }
 if((ch2=='00'))
{
   alert ('chaine doit commencer par 4si et suivi par deux chiffres');
   return false;
   }
  
 dc=Number(f1.T2.value);
 ds=Number(f1.T3.value);
if ((dc<0) ||(dc>20))
{
   alert ('note de contrôle entre 0 et 20');
   return false;
   }
if ((ds<0) ||(ds>20))
{
   alert ('note de synthèse entre 0 et 20');
   return false;
   }
if((f1.D1.value!='algo')&&(f1.D1.value!='bd')&&(f1.D1.value!='tic'))
{
   alert ('Vous devez choisir une option');
   return false;
   }
  
  }

