<?php

/*
 * Squelette : plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.js.html
 * Date :      Sat, 18 Jan 2025 14:09:26 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.js.html
// Temps de compilation total: 0.085 ms
//

function html_829bd4af9347ffd7f896072b14cfb900($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 604800"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=604800"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/javascript') . '); ?'.'>') .
'var diapo_on=false;
var center=true;

// DEBUG SPIP 3 :  ajout du paramètre mnum
function diaposlide(timeout,mDiapo,nmum){
if (diapo_on){
mClass=$("#"+mDiapo+" .diapo .diapo_grand").show().attr(\'class\').replace(\' diapo_grand\',\'\').split(\'_\');
mpage="diapo_img";
mid_article=mClass[1];
if (!mnum) { mnum=mClass[2];}
$.get("spip.php",
{page : mpage, id_article : mid_article, num : mnum},
function(txt){

// DEBUG SPIP 3 :  spip.php ne renvoie plus les commentaires html il n\'est plus nécessaire de nettoyer "txt"
//debut=txt.indexOf("<!-- debut diapo_img"+mid_article+" -->");
   //fin=txt.lastIndexOf("<!-- fin diapo_img"+mid_article+" -->");
//txt=txt.substring(debut,fin);

$("#"+mDiapo+" .diapo").html(txt);
});

// DEBUG SPIP 3 :  ajout du paramètre mnum
setTimeout(\'diaposlide(\'+timeout+\',mDiapo, mnum++)\', timeout);
}
}
$.fn.diapo_mode = function() {
   return this.click(function() {
   mDiapo=$(this).attr(\'rel\');
$("#"+mDiapo+" .diapo_icones a").removeClass("selected");
mId=$(this).attr(\'class\');
$(this).addClass("selected");
if ((mId=="diapo_ico")||(mId=="diapo_ico play")){
$("#"+mDiapo+" .diapo_pagination").hide();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes diapo_vignettes_invisible");
$("#"+mDiapo+" div.diapo").attr("class","diapo diapo_grand");
$("#"+mDiapo+" div.diapo img.diapo_petit").hide();
$("#"+mDiapo+" div.diapo img.diapo_grand").show();
diapo_on=!diapo_on;
center=true;
if (mId=="diapo_ico") $(this).attr("class","diapo_ico play").html(\'' .
_T('diapo:ico_diapo_play') .
'\');
else $(this).attr("class","diapo_ico").html(\'' .
_T('diapo:ico_diapo_pause') .
'\');

// DEBUG SPIP 3 :  ajout du paramètre mnum
mClass=$("#"+mDiapo+" .diapo .diapo_grand").show().attr(\'class\').replace(\' diapo_grand\',\'\').split(\'_\');
mnum=mClass[2];

setTimeout(\'diaposlide(' .
retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('diapo/config/temps_pause','5000',false):''))) .
',mDiapo, mnum)\', ' .
retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('diapo/config/temps_pause','5000',false):''))) .
');
}else if (mId=="diapo_icoleft"){
$("#"+mDiapo+" .diapo_pagination").show();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes diapo_vignettes_invisible");
$("#"+mDiapo+" div.diapo").attr("class","diapo diapo_petit");
$("#"+mDiapo+" div.diapo img.diapo_grand").hide();
$("#"+mDiapo+" div.diapo img.diapo_petit").show();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes diapo_vignettes_left");
$("#"+mDiapo+" .diapo_ico").html(\'' .
_T('diapo:ico_diapo_play') .
'\');
diapo_on=false;
center=false;
}else if (mId=="diapo_icoright"){
$("#"+mDiapo+" .diapo_pagination").show();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes diapo_vignettes_invisible");
$("#"+mDiapo+" div.diapo").attr("class","diapo diapo_petit");
$("#"+mDiapo+" div.diapo img.diapo_grand").hide();
$("#"+mDiapo+" div.diapo img.diapo_petit").show();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes diapo_vignettes_right");
$("#"+mDiapo+" .diapo_ico").html(\'' .
_T('diapo:ico_diapo_play') .
'\');
diapo_on=false;
center=false;
}else{
$("#"+mDiapo+" .diapo_pagination").show();
$("#"+mDiapo+" .diapo_vignettes").attr("class","diapo_vignettes");
$("#"+mDiapo+" div.diapo").attr("class",\'diapo diapo_grand\');
$("#"+mDiapo+" div.diapo img.diapo_petit").hide();
$("#"+mDiapo+" div.diapo img.diapo_grand").show();
$("#"+mDiapo+" .diapo_ico").html(\'' .
_T('diapo:ico_diapo_play') .
'\');
diapo_on=false;
center=true;
}
return false;
   });
};
$.fn.diapo_pagination = function() {
   return this.click(function() {
   pagin="";
   mDiapo=$(this).attr(\'rel\');
   mClass=$("#"+mDiapo+" div.diapo img.diapo_grand").attr(\'class\').replace(" diapo_grand","").split(\'_\');
mPage="diapo";
malign=$("#"+mDiapo+" .diapo_icones a.selected").attr(\'class\').replace("diapo_ico","").replace(" selected","");
mid_article=mClass[1];
tab=$(this).attr(\'href\').split(\'#\');
   i=tab[0].lastIndexOf(\'debut\')
   if (i>0)
pagin="?"+tab[0].substring(i,(tab[0].indexOf(\'=\',i)))+"="+tab[0].substring((tab[0].indexOf(\'=\',i)+1),tab[0].length);
   $.get("spip.php"+pagin,
   {page : mPage, id_article : mid_article, align : malign},
   function(txt){

// DEBUG SPIP 3 :  ajout du paramètre mnum
   //debut=txt.indexOf("<!-- debut diapo"+mid_article+" -->");
   //fin=txt.lastIndexOf("<!-- fin diapo"+mid_article+" -->");
//txt=txt.substring(debut,fin);

   $("#diapo"+mid_article).html(txt);
   $(".diapo_icones").show();
$("#diapo"+mid_article+" .diapo_menu a.lien_pagination").attr("rel","diapo"+mid_article);
   $("#diapo"+mid_article+" .diapo_icones a").diapo_mode();
$("#diapo"+mid_article+" .diapo_menu a.lien_pagination").diapo_pagination();
$("#diapo"+mid_article+" .diapo_vignette a").diapo_vignette();
$("#diapo"+mid_article+" .diapo_icones .selected").click();
   });
return false;
   });
};
$.fn.diapo_vignette = function() {
   return this.click(function() {
   mClass=$(this).attr("class").split(\'_\');
mpage="diapo_img";
mid_article=mClass[1];
mnum=mClass[2]-1;
malign=$("#diapo"+mid_article+" .diapo_icones a.selected").attr(\'class\').replace("diapo_ico","").replace(" selected","");
$.get("spip.php",
{page : mpage, id_article : mid_article, num : mnum, align : malign},
function(txt){

// DEBUG SPIP 3 :  ajout du paramètre mnum
//debut=txt.indexOf("<!-- debut diapo_img"+mid_article+" -->");
   //fin=txt.lastIndexOf("<!-- fin diapo_img"+mid_article+" -->");
//txt=txt.substring(debut,fin);

   $("#diapo"+mid_article+" .diapo").html(txt);
});
return false;
   });
};
$.fn.diapo_center = function() {
return this.css("display")=="none";
}
$(document).ready(function(){
$(".diapo_icones").show();
$(".diapo_icones a").diapo_mode();
$(".diapo_menu a.lien_pagination").diapo_pagination();
$(".diapo_vignette a").diapo_vignette();
$(".diaporama").each(function(){
rel=$(this).attr("id");
$(this).find(".diapo_menu a.lien_pagination").attr("rel",rel);
});
$(".diapo_icones .selected").each(function(){
if ($(this).attr(\'class\')==\'diapo_ico selected play\') $(this).click();
});


});');

	return analyse_resultat_skel('html_829bd4af9347ffd7f896072b14cfb900', $Cache, $page, 'plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.js.html');
}
