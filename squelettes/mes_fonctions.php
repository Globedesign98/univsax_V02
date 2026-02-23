<?php

function ues_i3_traiter_formulaire($flux) {
	$pass = _request('pass');
	$pass2 = _request('password1');

	if ($pass && $pass2 && $pass === $pass2) {
		if (!function_exists('auth_loger')) {
			include_spip('inc/auth');
		}
		$auteur = sql_fetsel('*', 'spip_auteurs', 'id_auteur=' . intval($flux['args']['id_auteur']));
		if ($auteur) {
			auth_loger($auteur);
		}

		$flux['data']['message_ok'] = _T('inscription3:form_retour_inscription_pass_logue');
		$flux['data']['ne_pas_confirmer_par_mail'] = true;

		// ✅ Force un rechargement de page sur le slide 0
		$flux['data']['redirect'] = parametre_url(self(), 'slide', 0, '&');
	}

	return $flux;
}