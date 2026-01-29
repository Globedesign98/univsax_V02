<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<table width="450" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="450" align="right" valign="top" class="txt_gris10" ><script language="JavaScript">
navvers = navigator.appVersion.substring(0,1);
if (navvers > 3)
   navok = true;
else
   navok = false;

today = new Date;
jour = today.getDay();
numero = today.getDate();
if (numero<10)
   numero = "0"+numero;
mois = today.getMonth();
if (navok)
   annee = today.getFullYear();
else
   annee = today.getYear();
TabJour = new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
TabMois = new Array("janvier","f&eacute;vrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","d&eacute;cembre");
messageDate = TabJour[jour] + " " + numero + " " + TabMois[mois] + " " + annee;
   </script>
     <script language="JavaScript">
document.write(messageDate);
     </script> &nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/trans.gif" alt="Saxo" width="5" height="10"></td>
          </tr>
          
          <tr>
            <td align="right" valign="top"><?php include('includes/inc-historique_eng.php'); ?></td>
          </tr>
          <tr>
            <td><img src="images/trans.gif" alt="Saxo" width="5" height="23"></td>
          </tr>
          <tr>
            <td align="right" valign="top"><?php include('includes/inc-semler_eng.php'); ?></td>
          </tr>
        </table>
        <script type="text/javascript">
swfobject.registerObject("FlashID");
</script>