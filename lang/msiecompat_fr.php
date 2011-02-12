<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// Fichier source, a modifier dans svn://zone.spip.org/spip-zone/_core_/plugins/msie_compat/lang/
if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'choix_explication' => '<p>Cette configuration vous permet d&rsquo;am&eacute;liorer la compatibilit&eacute; du site public avec le navigateur Internet Explorer.</p>
			<ul>
			<li><a href=\'http://jquery.khurshid.com/ifixpng.php\'>iFixPng</a> (<b>par d&#233;faut</b>) r&#233;tablit la semi-transparence les images au format PNG sous MSIE&nbsp;5&nbsp;et&nbsp;6.</li>
			<li><a href=\'http://code.google.com/p/ie7-js/\'>IE7.js</a> corrige les images PNG et ajoute des s&eacute;lecteurs CSS2 pour MSIE&nbsp;5&nbsp;et&nbsp;6 (<a href=\'http://ie7-js.googlecode.com/svn/test/index.html\'>vous pouvez consulter la liste des s&#233;lecteurs compatibles introduits par IE7.js et IE8.js</a>).</li>
			<li>IE8.js compl&#232;te IE7.js en enrichissant les comportements des CSS de MSIE 5 &#224;&nbsp;7. </li>
			<li>IE7-squish corrige trois bugs de MSIE&nbsp;6 (notamment la double marge des &#233;l&#233;ments flottants), mais des effets ind&#233;sirables peuvent appara&#238;tre (le webmestre doit v&#233;rifier la compatibilit&#233;).</li>
			</ul>',
	'choix_non' => 'Ne pas activer&nbsp;: ne rien ajouter &#224; mes squelettes',
	'choix_titre' => 'Compatibilit&#233; Microsoft Internet Explorer'
);

?>
