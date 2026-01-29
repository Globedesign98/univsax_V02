<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('cisf_articles_non_publies_fonctions');

// http://doc.spip.org/@exec_puce_statut_dist
function exec_cisf_puce_statut_dist()
{
	exec_cisf_puce_statut_args(_request('id'),  _request('type'));
}

// http://doc.spip.org/@exec_puce_statut_args
function exec_cisf_puce_statut_args($id, $type)
{
		$id = intval($id);
        if ($table_objet_sql = table_objet_sql($type)
                AND $d = lister_tables_objets_sql($table_objet_sql)
                AND isset($d['statut_textes_instituer'])
                AND $d['statut_textes_instituer'])
        {
                $prim = id_table_objet($type);
                if (isset($d['field']['id_rubrique']))
                        $select = "id_rubrique,statut";
                else
                        $select = "0 as id_rubrique,statut";
                $r = sql_fetsel($select, $table_objet_sql, "$prim=$id");
                $statut = $r['statut'];
                $id_rubrique = $r['id_rubrique'];
        }
        else {
                $id_rubrique = $id;
                $statut = 'prop'; // arbitraire
        }
        $puce_statut = charger_fonction('puce_statut', 'inc');
        ajax_retour(str_replace('../','',$puce_statut($id,$statut,$id_rubrique,$type, true)));

}

?>