<?php
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/autoriser');
include_spip('base/abstract_sql');
include_spip('action/editer_liens'); // objet_trouver_liens()

function formulaires_envoyer_mail_ues_charger_dist($id_article = 0, $type_mail = '', $btn_label = '', $btn_class = '') {
	if (!autoriser('configurer') && !autoriser('webmestre')) {
		return false;
	}

	return [
		'id_article' => (int) $id_article,
		'type_mail' => (string) $type_mail,
		'btn_label' => (string) $btn_label,
		'btn_class' => (string) $btn_class,
		'message_ok' => '',
		'message_erreur' => '',
	];
}

function formulaires_envoyer_mail_ues_verifier_dist($id_article = 0, $type_mail = '', $btn_label = '', $btn_class = '') {
	$erreurs = [];

	$id_article = (int) _request('id_article');
	$type_mail = (string) _request('type_mail');

	if (!autoriser('configurer') && !autoriser('webmestre')) {
		$erreurs['message_erreur'] = "Non autorisé.";
		return $erreurs;
	}

	if (!$id_article) $erreurs['message_erreur'] = "Article manquant.";
	if (!$type_mail) $erreurs['message_erreur'] = "Type de mail manquant.";

	return $erreurs;
}

function formulaires_envoyer_mail_ues_traiter_dist($id_article = 0, $type_mail = '', $btn_label = '', $btn_class = '') {
	if (!autoriser('configurer') && !autoriser('webmestre')) {
		return ['message_erreur' => "Non autorisé."];
	}

	$id_article = (int) _request('id_article');
	$type_mail = (string) _request('type_mail');

	// 1) récupérer le 1er auteur lié à l'article via l'API SPIP
	$liens = objet_trouver_liens(['auteur' => '*'], ['article' => $id_article]);
	// $liens ressemble à: [ ['id_auteur'=>X, ...], ... ]
	$id_auteur = 0;
	if (is_array($liens) && count($liens) > 0) {
		$premier = reset($liens);
		if (is_array($premier) && isset($premier['id_auteur'])) {
			$id_auteur = (int) $premier['id_auteur'];
		}
	}

	if ($id_auteur <= 0) {
		return ['message_erreur' => "Aucun auteur trouvé via les liens SPIP pour cet article."];
	}

	$email = (string) sql_getfetsel('email', 'spip_auteurs', 'id_auteur=' . (int)$id_auteur);
	$nom_complet = (string) sql_getfetsel('nom', 'spip_auteurs', 'id_auteur=' . (int)$id_auteur);

	if (!$email) {
		return ['message_erreur' => "Email auteur introuvable."];
	}

	// Optionnel: prénom = premier mot du nom
	$prenom = '';
	$nom_complet = trim($nom_complet);
	if ($nom_complet !== '') {
		$parts = preg_split('/\s+/', $nom_complet);
		$prenom = $parts[0] ?? '';
	}

	// 2) dernier PDF lié à l'article (dernier PDF uniquement)
	$pdf_url = '';
	$id_doc = (int) sql_getfetsel(
		'dl.id_document',
		'spip_documents_liens AS dl JOIN spip_documents AS d ON d.id_document = dl.id_document',
		"dl.objet=" . sql_quote('article') . " AND dl.id_objet=" . (int)$id_article . " AND d.extension=" . sql_quote('pdf'),
		'',
		'dl.id_document DESC',
		'0,1'
	);

	if ($id_doc) {
		$fichier = (string) sql_getfetsel('fichier', 'spip_documents', 'id_document=' . (int)$id_doc);
		if ($fichier) {
			include_spip('inc/filtres'); // url_absolue()
			$pdf_url = preg_match('#^https?://#i', $fichier) ? $fichier : url_absolue($fichier);
		}
	}

	// 3) lien dossier (rub5 slide=1)
	include_spip('inc/urls');
	include_spip('inc/filtres');
	$dossier_url = url_absolue(generer_url_entite(5, 'rubrique', '', 'slide=1'));

	// 4) contenu HTML
	$logo = 'https://www.univsax.com/images/logo_ues.jpg';
	$partner = 'https://www.univsax.com/images/partenaire_ues.jpeg';

	if ($type_mail === 'publie') {
		$sujet = "Université Européenne de Saxophone — Formulaire validé (Edition 2026)";
		$intro_html = "Votre formulaire a été validé par Université Européenne de Saxophone pour l'Edition 2026."
			. "<br>Vous pouvez maintenant télécharger et signer votre formulaire d'inscription.";
	} elseif ($type_mail === 'ok_paiement') {
		$sujet = "Université Européenne de Saxophone — Inscription confirmée (Edition 2026)";
		$intro_html = "Votre paiement a été reçu et votre inscription est confirmée pour l'Edition 2026.";
	} else {
		return ['message_erreur' => "Type de mail inconnu."];
	}

	$btn1_label = ($type_mail === 'publie') ? "Télécharger le formulaire (PDF)" : "Accéder à votre dossier";
	$btn1_href  = ($type_mail === 'publie' && $pdf_url) ? $pdf_url : $dossier_url;

	$btn2_label = "Déposer le formulaire signé";
	$btn2_href  = $dossier_url;

	$salutation = ($prenom !== '') ? $prenom : $nom_complet;

	$message_html = ''
		. '<div style="font-family:Arial,Helvetica,sans-serif; font-size:15px; line-height:1.55; color:#111;">'
		. '  <div style="text-align:center; margin:0 0 16px;">'
		. '    <img src="' . htmlspecialchars($logo) . '" alt="UES" style="max-width:220px; height:auto;">'
		. '  </div>'
		. '  <p style="margin:0 0 12px;">Bonjour ' . htmlspecialchars($salutation) . ',</p>'
		. '  <p style="margin:0 0 16px;">' . $intro_html . '</p>'
		. '  <div style="margin:18px 0 8px;">'
		. '    <a href="' . htmlspecialchars($btn1_href) . '" '
		. '       style="display:inline-block; padding:12px 18px; margin:0 10px 10px 0; background:#f6c343; color:#111; text-decoration:none; font-weight:700; border-radius:10px;">'
		.        htmlspecialchars($btn1_label)
		. '    </a>'
		. '    <a href="' . htmlspecialchars($btn2_href) . '" '
		. '       style="display:inline-block; padding:12px 18px; margin:0 0 10px 0; background:#111; color:#fff; text-decoration:none; font-weight:700; border-radius:10px;">'
		.        htmlspecialchars($btn2_label)
		. '    </a>'
		. '  </div>'
		. '  <div style="text-align:center; margin:18px 0;">'
		. '    <img src="' . htmlspecialchars($partner) . '" alt="Partenaires" style="max-width:100%; height:auto; border-radius:10px;">'
		. '  </div>'
		. '  <hr style="border:none; border-top:1px solid #ddd; margin:18px 0;">'
		. '  <div style="font-size:13px; color:#444;">'
		. '    <strong>Université Européenne de Saxophone</strong><br>'
		. '    14 chemin de Vigneaux – Romette<br>'
		. '    05000 Gap France<br>'
		. '    <a href="https://www.univsax.com" style="color:#444;">www.univsax.com</a><br>'
		. '    <a href="mailto:inscription@univsax.com" style="color:#444;">inscription@univsax.com</a><br>'
		. '    Tél : +033 (0)4.92.45.06.48'
		. '  </div>'
		. '</div>';

	// 5) envoi (Facteur: headers string)
	$envoyer_mail = charger_fonction('envoyer_mail', 'inc');
	$from = 'inscription@univsax.com';
	$headers =
		"MIME-Version: 1.0\n"
		. "Content-Type: text/html; charset=utf-8\n"
		. "From: Université Européenne de Saxophone <{$from}>\n"
		. "Reply-To: {$from}\n";

	$ok = $envoyer_mail($email, $sujet, $message_html, '', $headers);

	if (!$ok) {
		return ['message_erreur' => "Échec de l'envoi (vérifie la config email de SPIP/Facteur)."];
	}

	return ['message_ok' => "Email envoyé."];
}