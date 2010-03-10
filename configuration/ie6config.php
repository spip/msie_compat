<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2010                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/presentation');
include_spip('inc/config');



function configuration_ie6config()
{
	$iecompat = $GLOBALS['meta']["iecompat"];
	if (!$iecompat) $iecompat = "non";

	$res = "<p>Cette configuration vous permet d&rsquo;am&eacute;liorer la compatibilit&eacute; du site public avec le navigateur Internet Explorer.</p>
			<ul>
			<li><a href='http://jquery.khurshid.com/ifixpng.php'>iFixPng</a> rétablit la semi-transparence les images au format PNG sous MSIE&nbsp;5&nbsp;et&nbsp;6.</li>
			<li><a href='http://code.google.com/p/ie7-js/'>IE7.js</a> corrige les images PNG et ajoute des comportements de CSS2 pour MSIE&nbsp;5&nbsp;et&nbsp;6.</li>
			<li>IE8.js complète IE7.js en enrichissant les comportements des CSS de MSIE 5 à&nbsp;7. </li>
			<li>IE9.js complète les précédents en enrichissant MSIE&nbsp;5 à&nbsp;8.</li>
			<li>IE7-squish corrige trois bugs de MSIE&nbsp;6 (notamment la double marge des éléments flottants), mais des effets indésirables peuvent apparaître (le webmestre doit vérifier la compatibilité).</li>
			</ul>";
	
	$res .= afficher_choix('iecompat', $iecompat,
		array('non' => _L('Non: ne rien ajouter &agrave; mes squelettes'),
			'ifixpng' => _L('iFixPng : activer l’affichage des PNG 24 (<b>recommandé</b>)'),
			'IE7' => _L("IE7.js : affichages des PNG 24 et quelques comportements de styles"),
			'IE7squish' => _L("IE7.js + ie7-squish.js : ajoute la correction des doubles marges sur les &eacute;l&eacute;ments flottants"),
			'IE8' => _L('IE8.js'),
			'IE8squish' => _L('IE8.js + ie7-squish.js'),
			'IE9' => _L('IE9.js'),
			'IE9squish' => _L('IE9.js + ie7-squish.js')
		), 
		" <br /> ");
	
	
	$res = debut_cadre_trait_couleur(find_in_path("imgs/ie6-logo24.png"), true, "", _L("Compatibilité Microsoft Internet Explorer"))
	. ajax_action_post('configurer', 'ie6config', 'configuration','',$res)
	. fin_cadre_trait_couleur(true);

	return ajax_action_greffe('configurer-ie6config', '', $res);

}
?>
