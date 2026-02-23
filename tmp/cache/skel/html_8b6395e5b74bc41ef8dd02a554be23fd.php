<?php

/*
 * Squelette : ../prive/formulaires/dateur/inc-dateur.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dateur/inc-dateur.html
// Temps de compilation total: 0.891 ms
//

function html_8b6395e5b74bc41ef8dd02a554be23fd($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<script>
function date_picker_options(){
	return {
		closeText: \'' .
texte_script(_T('public|spip|ecrire:bouton_fermer')) .
'\',
		prevText: \'' .
texte_script(_T('public|spip|ecrire:precedent')) .
'\',
		nextText: \'' .
texte_script(_T('public|spip|ecrire:suivant')) .
'\',
		currentText: \'' .
texte_script(_T('public|spip|ecrire:date_aujourdhui')) .
'\',
		clearText: \'' .
texte_script(_T('public|spip|ecrire:lien_supprimer')) .
'\',
		monthNames: [
			\'' .
texte_script(_T('public|spip|ecrire:date_mois_1')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_2')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_3')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_4')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_5')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_6')) .
'\',
			\'' .
texte_script(_T('public|spip|ecrire:date_mois_7')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_8')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_9')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_10')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_11')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_12')) .
'\'],
		monthNamesShort: [
			\'' .
texte_script(_T('public|spip|ecrire:date_mois_1_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_2_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_3_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_4_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_5_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_6_abbr')) .
'\',
			\'' .
texte_script(_T('public|spip|ecrire:date_mois_7_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_8_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_9_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_10_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_11_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_mois_12_abbr')) .
'\'],
		dayNames: [
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_1')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_2')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_3')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_4')) .
'\',
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_5')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_6')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_7')) .
'\'],
		dayNamesShort: [
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_1_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_2_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_3_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_4_abbr')) .
'\',
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_5_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_6_abbr')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_7_abbr')) .
'\'],
		dayNamesMin: [
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_1_initiale')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_2_initiale')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_3_initiale')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_4_initiale')) .
'\',
			\'' .
texte_script(_T('public|spip|ecrire:date_jour_5_initiale')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_6_initiale')) .
'\',\'' .
texte_script(_T('public|spip|ecrire:date_jour_7_initiale')) .
'\'],
		dateFormat: \'dd/mm/yy\',
		firstDay: 1,
		autoclose: true,
		todayBtn: true,
		clearBtn: false,
		orientation: \'bottom\',
		showOn:false,   // jQuery UI
		showOnFocus:false,// BS Datepicker
		todayHighlight:true,
		zIndexOffset: 1010
	};
}
function time_picker_options() {
	return {
		step: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'heure_pas', null), '30'),true))) .
',
	};
}

function date_picker_range_changed_date($me) {
	var newValue = $me.val();
	var newDate = $me.datepicker(\'getDate\');
	if ($me.data(\'range-after\')) {
		var $after = jQuery($me.data(\'range-after\'));
		if ($after) {
			var afterDate = $after.datepicker(\'getDate\');
			if (afterDate < newDate) {
				$after.datepicker(\'setDate\', newDate);
			}
			$after.datepicker(\'setStartDate\', newDate);
		}
	}
	if ($me.data(\'range-before\')) {
		var $before = jQuery($me.data(\'range-before\'));
		if ($before) {
			var beforeDate = $before.datepicker(\'getDate\');
			if (beforeDate > newDate) {
				$before.datepicker(\'setDate\', newDate);
			}
			$before.datepicker(\'setEndDate\', newDate);
		}
	}
}

function date_picker_enable_on_this(opts) {
	var $me = jQuery(this);
	opts = opts || {};

	if (!$me.is(\'.datePicker\')) {
		var options =  date_picker_options();
		var lang = \'' .
retablir_echappements_modeles(texte_script(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang']))) .
'\';
		if (typeof jQuery.fn.datepicker.dates !== "undefined"){
			if (typeof jQuery.fn.datepicker.dates[lang]==="undefined" || lang===\'en\'){
				jQuery.fn.datepicker.dates[lang] = {
					days: options.dayNames,
					daysShort: options.dayNamesShort,
					daysMin: options.dayNamesMin,
					months: options.monthNames,
					monthsShort: options.monthNamesShort,
					today: options.currentText,
					clear: options.clearText,
					format: options.dateFormat.replace(\'yy\', \'yyyy\'),
					titleFormat: "MM yyyy", /* Leverages same syntax as \'format\' */
					weekStart: options.firstDay,
					rtl: ' .
retablir_echappements_modeles(((lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl') == 'rtl') ? 'true':'false')) .
'
				};
			}
			options.language = lang;
		}

		// Pour chaque champ, on regarde s\'il y a des options propres
		if ($me.data(\'startdate\')) {
			options.startDate = $me.data(\'startdate\');
		}
		if ($me.data(\'enddate\')) {
			options.endDate = $me.data(\'enddate\');
		}
		if ($me.data(\'todaybtn\')) {
			options.todayBtn = $me.data(\'todaybtn\');
		}
		if ($me.data(\'todayhighlight\')) {
			options.todayHighlight = $me.data(\'todayHighlight\');
		}
		if ($me.data(\'clearbtn\')) {
			options.clearbtn = $me.data(\'clearbtn\');
		}
		if ($me.data(\'orientation\')) {
			options.orientation = $me.data(\'orientation\');
		}
		if ($me.data(\'showonfocus\')){
			options.showOnFocus = $me.data(\'showonfocus\');
			if (options.showOnFocus) {
				options.showOn = \'focus\';
			}
		}

		if (opts) {
			options = jQuery.extend(options, opts);
		}

		$me
			.addClass(\'datePicker\')
			.datepicker(jQuery.extend({},options))
			.trigger(\'datePickerLoaded\');

		if (!options.showOnFocus) {
			$me.on(\'click\', function(){
				if ($me.is(":visible")) {
					$me.datepicker(\'show\');
				}
			});
		}

		if ($me.data(\'range-after\') || $me.data(\'range-before\')) {
			$me.on(\'changeDate\', function (){date_picker_range_changed_date($me)});
		}
	}
}

function date_picker_init(){
	// Initialisation du sélecteur sur les champs de date
	jQuery(\'input.date\').not(\'.datePicker\')
		.each(function() {
			date_picker_enable_on_this.apply(this,[{}]);
		});

	// Initialisation du sélecteur sur les champs d\'heure
	jQuery("input.heure").not(\'.timePicker\')
		.addClass(\'timePicker\').each(function() {
			// Pour chaque champ, on regarde s\'il y a des options propres
			var options = {};
			if (jQuery(this).data(\'starttime\')) {
				options.startTime = jQuery(this).data(\'starttime\');
			}
			if (jQuery(this).data(\'endtime\')) {
				options.endTime = jQuery(this).data(\'endtime\');
			}
			if (jQuery(this).data(\'step\')) {
				options.step = jQuery(this).data(\'step\');
			}
			jQuery(this)
				.timePicker(jQuery.extend(time_picker_options(), options));
		});
}

var date_picker_loading;
if (window.jQuery){
	jQuery(function(){
		if (jQuery(\'input.date,input.heure\').length
			&& typeof(date_picker_loading) === "undefined"){
			date_picker_loading = jQuery.getScript(\'' .
retablir_echappements_modeles(timestamp(produire_fond_statique( 'formulaires/dateur/jquery.dateur.js' , array(), array('compil'=>array('../prive/formulaires/dateur/inc-dateur.html','html_8b6395e5b74bc41ef8dd02a554be23fd','',87,$GLOBALS['spip_lang'])), _request('connect') ?? ''))) .
'\');
			date_picker_loading.done(function(){
				date_picker_init();
				onAjaxLoad(date_picker_init);
			})
		}
	});
}
</script>
<style type="text/css">
' .
retablir_echappements_modeles(filtre_compacte_dist(charge_scripts('formulaires/dateur/time_picker.css',false),'css')) .
'
' .
retablir_echappements_modeles(filtre_compacte_dist(charge_scripts('formulaires/dateur/bootstrap-datepicker.standalone.css',false),'css')) .
'
.datepicker th {border-radius: 0;}
.datepicker td.day {background: transparent;}
div.time-picker {font-size:11px;  width:5em; /* needed for IE */}
input.datePicker {background-image: url(' .
retablir_echappements_modeles(chemin_image((string)'calendrier-16.png')) .
');background-size:1em;background-position:' .
retablir_echappements_modeles(interdire_scripts(choixsiegal(lang_dir(entites_html(table_valeur($Pile[0]??[], (string)'lang', null),true)),'ltr','right','left'))) .
' 0.25em center;background-repeat:no-repeat;}
.formulaire_spip input.date {width:9em;padding-' .
retablir_echappements_modeles(interdire_scripts(choixsiegal(lang_dir(entites_html(table_valeur($Pile[0]??[], (string)'lang', null),true)),'ltr','right','left'))) .
':1.5em;}
.formulaire_spip input.heure {width:7em;}
</style>
');

	return analyse_resultat_skel('html_8b6395e5b74bc41ef8dd02a554be23fd', $Cache, $page, '../prive/formulaires/dateur/inc-dateur.html');
}
