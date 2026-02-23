<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<p>&lt;?php<br />
  if (!defined('_ECRIRE_INC_VERSION')) return;</p>
<p>include_spip('inc/presentation');</p>
<p>$commencer_page = charger_fonction('commencer_page', 'inc');<br />
  echo $commencer_page(_T('export_articles_xlsx:titre_page'), 'configuration', 'export_articles_xlsx');</p>
<p>echo debut_gauche('', true);<br />
  // Navigation standard (vide)<br />
  echo creer_colonne_droite('', true);<br />
  echo debut_droite('', true);</p>
<p>// Le contenu vient de prive/squelettes/contenu/export_articles_xlsx.html<br />
  $contenu = recuperer_fond('prive/squelettes/contenu/export_articles_xlsx', []);<br />
  echo $contenu;</p>
<p>echo fin_gauche(), fin_page();</p>
</body>
</html>