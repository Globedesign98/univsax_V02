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
          </script>                &nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/trans.gif" alt="Saxo" width="5" height="10"></td>
          </tr>
          <tr>
            <td align="left" valign="top">
            <?php include('includes/m_equipe.php'); ?>
            </td>
          </tr>
          <tr>
            <td><img src="images/trans.gif" alt="Saxo" width="5" height="23" /></td>
          </tr>
          <tr>
            <td>
            <div class="cadre_color">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left"><h2 class="roboto txt_15 txt_blc"><span class="txt_20 txt_blue">I</span>ntervenants 2025</h2>
                    <div class="ues_trait_titre"></div></td>
                  </tr>
                  <tr>
                    <td align="left"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="100%" border="0">
                      <tr>
                        <td width="83%" align="justify" valign="top" class="txt_blc12"><div class="margin_top5"></div>
                          <a href="enseignement_intervenant.php"><strong>Claude Delangle</strong> animera chaque jour de 11h15 à 12h45, puis au cours du déjeuner pris en commun au FJT, une séance de « coaching personnalisé » sur rendez-vous. Les étudiants peuvent présenter un court extrait musical ou venir sans saxophone avec des questions précises pour recevoir des conseils d'orientation dans leur parcours préprofessionnel.</a>
                         
<div class="margin_top5"></div>
                          </td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td><img src="images/trans.gif" alt="Saxo" width="5" height="23"></td>
          </tr>
          
        </table>
